const loadData = async () => {
    const response = await fetch("/api/books/latest");
    const data = await response.json();
    data[0].title;

    data.forEach((element) => {
        const div = document.createElement("div");
        div.innerHTML = element.description;

        document.getElementById(
            "latest-books"
        ).innerHTML += `<div class="container"><div class="text__container"><div class="title">${element.title}</div> 
    <div class ="publication"> Date: ${element.publication_date}</div>
    <div class ="description">${div.innerText}</div></div>
    <div class="img__container"><img src="${element.image}" alt="film"></div></div>`;
    });
};
loadData();
