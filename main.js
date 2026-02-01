function scrollToSection(id) {
  const element = document.getElementById(id);
  const offset = 80; // altura del header
  const position = element.offsetTop - offset;

  window.scrollTo({
    top: position,
    behavior: 'smooth'
  });
}
