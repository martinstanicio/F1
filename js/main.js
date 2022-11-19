function toggleLinks() {
  const links = document.getElementById("links");
  let linksDisplay = links.style.getPropertyValue("--display-links");

  links.style.setProperty(
    "--display-links",
    linksDisplay == "flex" ? "none" : "flex"
  );
}
