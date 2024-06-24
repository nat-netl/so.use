let MainList = document.getElementById("svg__list"),
listB = document.getElementById("svg__list-b"),
button = document.getElementById("btn-blue");

function shuffleNodes() {
    for (var i = listB.children.length; i >= 0; i--) {
        listB.appendChild(listB.children[Math.random() * i | 0]);
    }

    for (var i = MainList.children.length; i >= 0; i--) {
        MainList.appendChild(MainList.children[Math.random() * i | 0]);
    }
}

button.onclick = shuffleNodes;