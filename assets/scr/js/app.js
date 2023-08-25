function isTouchDevice() {
    return true == ("ontouchstart" in window || window.DocumentTouch && document instanceof DocumentTouch);
}

document.addEventListener("DOMContentLoaded", function (event) {

    [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).map(function (e) {
        if (isTouchDevice() === false)
            return new bootstrap.Tooltip(e, {trigger: "hover", delay: {'show': 500, 'hide': 0}})
    });

});











function colapsSidebar() {
    let elem = document.querySelector('.sidebar');
    if (elem.classList.contains('collapsed')) {
        elem.classList.remove('collapsed');
        window.localStorage.setItem('sidebarval', '')
    } else {
        elem.classList.add('collapsed');
        window.localStorage.setItem('sidebarval', 'collapsed')
    }
}



