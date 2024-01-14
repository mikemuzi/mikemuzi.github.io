function showPage(pageId) {
  // Hide all pages
  let pages = document.querySelectorAll(".page");
  pages.forEach(function (page) {
    page.style.display = "none";
  });

  // Show the selected page
  let selectedPage = document.getElementById(pageId);
  if (selectedPage) {
    selectedPage.style.display = "block";
  }
}
