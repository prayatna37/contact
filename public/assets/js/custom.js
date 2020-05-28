function deleteConfirm() {
    var message = confirm('Are you Sure? Deleted contacts cannot be recovered.');
    if (message == true) {
        return true;
    } else {
        event.preventDefault();
        return false;
    }

}
