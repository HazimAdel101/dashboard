// toggle sidebar items
function toggleSubMenu(submenuId) {
    var submenu = document.getElementById(submenuId + 'Submenu');
    var collapsedIcon = document.getElementById(submenuId + 'CollapsedIcon');
    var expandedIcon = document.getElementById(submenuId + 'ExpandedIcon');

    // Collapse all other submenus and reset their icons
    var submenus = document.querySelectorAll('.submenu');
    submenus.forEach(function(item) {
        if (item.id !== submenuId + 'Submenu') {
            item.style.display = 'none';
            var subId = item.id.replace('Submenu', '');
            document.getElementById(subId + 'CollapsedIcon').style.display = 'inline-block';
            document.getElementById(subId + 'ExpandedIcon').style.display = 'none';
        }
    });

    // Toggle the clicked submenu and update its icon
    if (submenu.style.display === 'block') {
        submenu.style.display = 'none';
        collapsedIcon.style.display = 'inline-block';
        expandedIcon.style.display = 'none';
    } else {
        submenu.style.display = 'block';
        collapsedIcon.style.display = 'none';
        expandedIcon.style.display = 'inline-block';
    }
}
