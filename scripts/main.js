let navBarOpen = false;

function ShowImageViewer(address)
{
    var fullResViewer = document.getElementById("full-res-image-viewer");
    fullResViewer.style.display = "block";

    var fullResImage = document.getElementById("full-res-image");
    fullResImage.src = address;

    var fullResImageLink = document.getElementById("full-res-image-link");
    fullResImageLink.href = address;

    document.body.style.height = "100%";
    document.body.style.overflow = "hidden";
}

function CloseImageViewer()
{
    var fullResViewer = document.getElementById("full-res-image-viewer");
    fullResViewer.style.display = "none";

    document.body.style.height = "100%";
    document.body.style.overflow = "visible";
}

function OpenNavBar()
{
    navLinks = document.getElementById("nav-links");
    navLinks.style.transform = "translate(0, 0%)";

    navBarOpen = true;
}

function CloseNavBar()
{
    navLinks = document.getElementById("nav-links");
    navLinks.style.transform = "translate(0, -100%)";

    navBarOpen = false;
}