function loadMealsData() {
    const content = document.querySelector('.card-meal_content');

    xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        let response = this.response;
        const startIndex = response.indexOf('[');
        const jsonStr = response.substring(startIndex);
        const jsonObject = JSON.parse(jsonStr);


        content.innerHTML = "<h1>Meals</h1>";

        jsonObject.forEach(meal => {
            const mealHTML = `
                            <div class='cardmeal' id='meal-card'>
                                <div class='cardmealimage'>
                                    <img src=${meal.path_photo} alt=''>
                                </div>
                                <div class='card-meal__content'>
                                <div class='card-meal__content__title'>
                                <h3>${meal.title}</h3>
                                </div>
                                <div class='card-meal__content__description'>
                                <p>${meal.highlight}</p>
                                </div>
                                <div class='card-meal__content__calories'>
                                <p>Calories: ${meal.calorie}</p>
                                </div>
                                </div>
                                <div class='card-meal__content__edit'>
                                <a href="/?editmeal&id=${meal.id}">
                                <button type='button' class='editbtn'>Edit</button>
                                </a>
                                    <button type='button' class='deletebtn'>Delete</button>
                                </div>
                            </div>`;
            content.innerHTML += mealHTML;
        });
    };
    xhttp.open('GET', "../../../server/controller/auth/cms/Meals.php", true);
    xhttp.send();
}