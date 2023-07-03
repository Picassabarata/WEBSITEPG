var selectedTeeth = [];

function onToothClick(e){
        const toothId = e.target.id;
        console.log(toothId);
}

Array.from(teeth).forEach((tooth) => {
    tooth.addEventListener("click", onToothClick)
})
