const devYear = 2022;
const currentYear = new Date().getFullYear();

if (currentYear === devYear) {
    document.write(currentYear + ' ' + '| Todos los derechos reservados.');
} else {
    document.write(currentYear + ' - ' + currentYear + ' ' + '| Todos los derechos reservados.');
}



