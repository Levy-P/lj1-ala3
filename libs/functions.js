// Klemt een nummer tussen twee waardes. Een minimaal getal, en een maximaal getal.
function clamp(number, min, max) {
    return Math.min(max, Math.max(min, number));
}

// Checkt of een variable leeg is (net zoals de functie in PHP).
function isEmpty(value) {
    return (value == null  || value.length == 0);
}