function komentar(icons, titles, texts) {
    if (icons == 1) {
        ale = "success";
    }
    else {
        ale = "error";
    }
    Swal.fire({
        title: titles,
        text: texts,
        icon: ale
    });
}