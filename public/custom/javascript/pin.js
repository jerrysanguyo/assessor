/*********************
 * PIN Management Script
 ********************/

document.addEventListener("DOMContentLoaded", function () {
    const createForm = document.getElementById("create-pin-form");
    const editForm = document.getElementById("edit-pin-form");

    // Fetch routes dynamically from hidden input fields
    const routes = {
        index: document.getElementById("route-index").value,
        store: document.getElementById("route-store").value,
        edit: document.getElementById("route-edit").value,
        update: document.getElementById("route-update").value,
    };

    /*********************
     * Create PIN
     ********************/
    $("#create-button").on("click", function () {
        createForm.reset(); // Reset the form
        createForm.classList.remove("was-validated");
        $("#modal-create-pin").modal("show");
    });

    $("#save-pin-button").on("click", function () {
        if (!createForm.checkValidity()) {
            createForm.classList.add("was-validated");
            return;
        }

        const formData = $("#create-pin-form").serialize();
        $.ajax({
            url: routes.store,
            type: "POST",
            data: formData,
            success: function (response) {
                if (response.success) {
                    $("#modal-create-pin").modal("hide");
                    showAlert("success", response.message);
                    setTimeout(() => {
                        window.location.reload(); // Custom function to reload the table content
                    }, 2000); // 2-second delay
                } else {
                    showAlert("danger", response.message);
                }
            },
            error: function (xhr) {
                showAlert(
                    "danger",
                    xhr.responseJSON?.message || "An error occurred."
                );
            },
        });
    });

    /*********************
     * Edit PIN
     ********************/
    $(document).on("click", ".edit-record-btn", function () {
        const id = $(this).data("id");
        $.ajax({
            url: routes.edit.replace(":id", id),
            type: "GET",
            success: function (response) {
                if (response.success) {
                    // Populate the edit form
                    $("#edit-pin-id").val(response.data.id);
                    $("#edit-PIN").val(response.data.PIN);
                    $("#edit-Location").val(response.data.Location);
                    $("#edit-LotNo").val(response.data.LotNo);
                    $("#edit-BlkNo").val(response.data.BlkNo);
                    $("#edit-SurveyNo").val(response.data.SurveyNo);
                    $("#edit-Kind").val(response.data.Kind);

                    $("#modal-edit-pin").modal("show");
                } else {
                    showAlert("danger", "Failed to fetch record details.");
                }
            },
            error: function (xhr) {
                showAlert(
                    "danger",
                    "An error occurred while fetching the record."
                );
            },
        });
    });

    $("#update-pin-button").on("click", function () {
        const actionUrl = $("#edit-pin-form")
            .attr("action")
            .replace(":id", $("#edit-pin-id").val());

        if (!editForm.checkValidity()) {
            editForm.classList.add("was-validated");
            return;
        }

        const formData = $("#edit-pin-form").serialize();
        $.ajax({
            url: actionUrl,
            type: "POST",
            data: formData,
            success: function (response) {
                if (response.success) {
                    $("#modal-edit-pin").modal("hide");
                    showAlert("success", response.message);
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                } else {
                    showAlert("danger", response.message);
                }
            },
            error: function (xhr) {
                showAlert(
                    "danger",
                    xhr.responseJSON?.message || "An error occurred."
                );
            },
        });
    });

    function showAlert(type, message) {
        const alertHtml = `
        <div class="alert alert-${type} alert-dismissible fade show text-center font-weight-bold text-uppercase" role="alert" style="font-size: 1.2rem;">
            ${message}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>`;
        $(".alert-container").html(alertHtml);
        setTimeout(() => $(".alert").alert("close"), 5000);
    }
});
