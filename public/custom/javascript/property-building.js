$(document).ready(function () {
    const storeUrl = $("#storePropertyAppraisalUrl").val();
    const updateUrl = $("#updatePropertyAppraisalUrl").val();

    $("#property-container tfoot th.search").each(function () {
        var title = $(this).text();
        $(this).html(
            '<input type="text" placeholder="Search ' +
                title +
                '" class="search-input form-control form-control-sm"/>'
        );
    });
    $("#property-container").DataTable({
        responsive: true,
        dom:
            "<'row justify-content-between'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row justify-content-between'<'col-sm-5'i><'col-sm-7'p>>",
        buttons: [
            {
                extend: "copy",
                className: "btn btn-outline-secondary btn-sm",
                text: '<i class="fas fa-copy"></i> Copy',
            },
            {
                extend: "csv",
                className: "btn btn-outline-primary btn-sm",
                text: '<i class="fas fa-file-csv"></i> CSV',
            },
            {
                extend: "excel",
                className: "btn btn-outline-success btn-sm",
                text: '<i class="fas fa-file-excel"></i> Excel',
            },
            {
                extend: "pdf",
                className: "btn btn-outline-danger btn-sm",
                text: '<i class="fas fa-file-pdf"></i> PDF',
            },
            {
                extend: "print",
                className: "btn btn-outline-dark btn-sm",
                text: '<i class="fas fa-print"></i> Print',
            },
        ],
        language: {
            emptyTable: `
                <div class="text-center">
                    <img src="/img/empty-box.png" alt="No Data" style="width: 100px; height: auto; margin-bottom: 10px;" />
                     <p class="mt-2" style="font-size: 14px;">No data available in table</p>
                </div>
            `,
        },
        initComplete: function () {
            this.api()
                .columns()
                .every(function () {
                    const column = this;
                    $("input", column.footer()).on(
                        "keyup change clear",
                        function () {
                            if (column.search() !== this.value) {
                                column.search(this.value).draw();
                            }
                        }
                    );
                });
        },
    });
    $("#addAppraisalBtn").click(function () {
        $("#addPropertyAppraisalForm")[0].reset();
        $("#addPropertyAppraisalModal").modal("show");
    });
    $("#addPropertyAppraisalModal").on("hidden.bs.modal", function () {
        $("#addPropertyAppraisalForm")[0].reset();
    });
    $(document).on("click", ".edit-btn", function () {
        const row = $(this);
        $("#appraisalId").val(row.data("id"));
        $("#AU").val(row.data("au"));
        $("#Description").val(row.data("description"));
        $("#Area").val(row.data("area"));
        $("#Story").val(row.data("story"));
        $("#TypeOfStructure").val(row.data("type"));
        $("#Unit_Value").val(row.data("unit-value"));
        $("#AdjLvl").val(row.data("adj-lvl"));
        $("#Market_Value").val(row.data("market-value"));
        $("#AL").val(row.data("assessment-level"));
        $('input[name="option"]').prop("checked", false);
        if (row.data("exempt") == 1) {
            $("#Exempt").prop("checked", true);
        } else if (row.data("additional") == 1) {
            $("#Additional").prop("checked", true);
        }
        $("#propertyAppraisalModal").modal("show");
    });
    $("#addPropertyAppraisalForm").submit(function (e) {
        e.preventDefault();
        const formData = $(this).serialize();

        $.ajax({
            url: storeUrl,
            type: "POST",
            data: formData,
            success: function (response) {
                showAlert("success", "Property appraisal added successfully!");
                $("#addPropertyAppraisalModal").modal("hide"); // Hide modal
                setTimeout(() => {
                    location.reload();
                }, 3000);
            },
            error: function (xhr) {
                showAlert(
                    "danger",
                    "An error occurred: " + xhr.responseJSON.message
                );
            },
        });
    });
    $("#propertyAppraisalForm").submit(function (e) {
        e.preventDefault();
        const formData = $(this).serialize();
        const id = $("#appraisalId").val();

        $.ajax({
            url: `${updateUrl}/${id}`, // Use the update URL
            type: "PUT",
            data: formData,
            success: function (response) {
                showAlert(
                    "success",
                    "Property appraisal updated successfully!"
                );
                $("#propertyAppraisalModal").modal("hide");
                setTimeout(() => {
                    location.reload();
                }, 3000);
            },
            error: function (xhr) {
                showAlert(
                    "danger",
                    "An error occurred: " + xhr.responseJSON.message
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
