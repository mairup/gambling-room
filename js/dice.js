moneyDisplay.innerText = Math.floor(money);

const dice = document.getElementById("dice-box").children
const dieCon = document.getElementById("die-container")
let dieInputs = []

for (const die of dice) {
    const tmp = die.cloneNode(true)
    tmp.style.display = "none"
    dieCon.appendChild(tmp)

    const dieInput = document.createElement("input")
    dieInput.setAttribute('style', 'display:none');

    dieInput.setAttribute('name', 'diceSelector[]');
    dieInput.setAttribute('value', '0');

    dieInputs.push(dieInput)

    die.addEventListener("click", function () {
        count = document.getElementById("dice-box").querySelectorAll(".selected").length + 1
        if (Math.floor(money - betAmount.value * count) >= 0 || this.classList.contains("selected")) {
            die.classList.toggle("selected");
            die.classList.contains("selected") ? dieInput.setAttribute('value', '1') : dieInput.setAttribute('value', '0')
            handleMoney()
        }
        else {
            for (const die2 of dice)
                die2.classList.remove("selected");
            for (const dieIn of dieInputs)
                dieIn.setAttribute('value', '0')

            handleMoney()
            if (moneyDisplay.innerText > 0) {
                die.classList.contains("selected") ? die.setAttribute('value', '1') : die.setAttribute('value', '0')
                die.classList.toggle("selected");
            }
            handleMoney()
        }
    })
}

for (const dieInput of dieInputs)
    document.getElementById("dice-else-box").appendChild(dieInput)


function handleMoney() {
    count = document.getElementById("dice-box").querySelectorAll(".selected").length
    moneyDisplay.innerText = Math.floor(money - betAmount.value * count)
}

const range = document.getElementById("bet-range")
const betAmount = document.getElementById("bet-amount")

range.addEventListener("input", function () {
    betAmount.value = range.value
})

betAmount.addEventListener("input", function () {
    range.value = betAmount.value
})

if (res != 0)
    animateDie(res);


let animationTime = 1000
const die1 = document.getElementById("die1")
let prevDie = 0
function animateDie() {
    dieCon.scrollIntoView({ behavior: "smooth", });
    setTimeout(() => {
        do {
            dieNum = Math.floor(Math.random() * 6)
        } while (dieNum == prevDie)
        dieCon.querySelectorAll("svg")[dieNum].style.display = "block"
        dieCon.querySelectorAll("svg")[prevDie].style.display = "none"
        prevDie = dieNum
        animationTime != 0 ? animateDie() : setDie()
    }, 100)
}

setTimeout(() => {
    animationTime = 0;
}, animationTime)

function setDie() {
    for (const die of dieCon.querySelectorAll("svg")) {
        die.style.display = "none"
    }
    dieCon.querySelectorAll("svg")[res - 1].style.display = "block"
    setTimeout(() => { document.getElementById("menu-btn").scrollIntoView({ behavior: "smooth", block: "end", inline: "nearest" }); }, 500)
    if (bool) dieCon.querySelectorAll("svg")[res - 1].style.backgroundColor = "var(--ins-color)"
    else dieCon.querySelectorAll("svg")[res - 1].style.backgroundColor = "var(--del-color)"
    dieCon.querySelectorAll("svg")[res - 1].style.borderRadius = "18%"
}