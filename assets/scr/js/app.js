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