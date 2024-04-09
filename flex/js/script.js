const logo = document.getElementById('logo')

logo.style.color = "red";

logo.remove();

const navigace = document.querySelector('nav');

navigace.prepend(logo);

const odkaz = document.createElement('a');

odkaz.href = "/stranka";
odkaz.textContent = "odkaz na další stránku";
odkaz.classList.add('odkaz');

navigace.append(odkaz);
navigace.append(vytvorOdkaz);

const skodlivyKod = document.createElement('script');

document.body.append(skodlivyKod);