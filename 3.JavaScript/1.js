/* Задача №1 */
const temp = Number.parseFloat(prompt("Введите температуру в градусах Цельсия, пожалуйста "));

function transformation(x) {
    const f = ((9 / 5) * x + 32);
    return f;
}

alert(`Вы ввели температуру в Целисиях ${temp} градус-(а)-(ов) , после преобразования получаем в Форенгейтах ${Number.parseFloat(transformation(temp).toFixed(1))} градус-(а)-(ов)`);

const answer = confirm("Вам понравился наш перевод градусов из одной системы в другую?;)");
if (answer) {
    alert("Спасибо, мы стараемся.");
} else {
    alert("Извините, мы только учимся, скоро будет еще лучше...))");
}
