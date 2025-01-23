/*********************
 * Global Delete Functionality
 *
 * This script handles the deletion of items globally using a modal confirmation dialog.
 * The logic uses AJAX for DELETE requests and dynamically updates the UI after deletion.
 ********************/

document.addEventListener("DOMContentLoaded", function () {
    let deleteUrl = ""; // Temporary variable to store the delete URL

    /*********************
     * Delete Button Click Handler
     *
     * - Attaches an event listener to elements with the `.delete-item` class.
     * - Prevents the default action and shows the delete confirmation modal.
     * - Stores the delete URL in the `deleteUrl` variable.
     ********************/
    $(document).on("click", ".delete-item", function (event) {
        event.preventDefault(); // Prevent default behavior (e.g., navigation)
        deleteUrl = $(this).attr("href"); // Get the URL for the delete action
        $("#globalDeleteModal").modal("show"); // Display the confirmation modal
    });

    /*********************
     * Confirm Delete Action
     *
     * - Sends an AJAX DELETE request to the server when the "Confirm" button is clicked.
     * - Uses the stored `deleteUrl` for the request.
     * - Displays a success or error alert based on the server's response.
     ********************/
    $("#confirmGlobalDeleteBtn").on("click", function () {
        if (!deleteUrl) return; // Do nothing if delete URL is not set

        $.ajax({
            method: "DELETE", // HTTP DELETE method
            url: deleteUrl, // URL for the delete action
            data: {
                _token: $('meta[name="csrf-token"]').attr("content"), // CSRF token for security
            },
            success: function (response) {
                // Hide the confirmation modal
                $("#globalDeleteModal").modal("hide");

                // Show a success alert to the user
                showAlert("success", "The item has been deleted successfully.");

                // Reload the table after a short delay
                setTimeout(() => {
                    window.location.reload(); // Custom function to reload the table content
                }, 2000); // 2-second delay
            },
            error: function (xhr) {
                // Hide the confirmation modal
                $("#globalDeleteModal").modal("hide");

                // Show an error alert to the user
                showAlert(
                    "danger",
                    xhr.responseJSON?.message ||
                        "An error occurred while deleting the item."
                );
            },
        });
    });

    /*********************
     * Modal Close Event
     *
     * - Resets the `deleteUrl` variable when the modal is hidden.
     ********************/
    $("#globalDeleteModal").on("hidden.bs.modal", function () {
        deleteUrl = ""; // Reset the delete URL
    });

    /*********************
     * Alert Display Function
     *
     * - Displays a Bootstrap alert message dynamically.
     * - The alert disappears automatically after 5 seconds.
     *
     * @param {string} type - The type of alert (e.g., "success", "danger").
     * @param {string} message - The message to display in the alert.
     ********************/
    function showAlert(type, message) {
        const alertHtml = `
        <div class="alert alert-${type} alert-dismissible fade show" role="alert">
            ${message}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>`;
        $(".alert-container").html(alertHtml); // Add alert to the container
        setTimeout(() => {
            $(".alert").alert("close"); // Automatically close the alert after 5 seconds
        }, 5000);
    }
});
