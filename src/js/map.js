var map;
function createCenterControl(map) {
    const blinc = { lat: 16.405748255310748, lng: 120.57735804549745 };
    const controlButton = document.createElement("button");

    // Set CSS for the control.
    controlButton.style.backgroundColor = "#fff";
    controlButton.style.border = "2px solid #fff";
    controlButton.style.borderRadius = "3px";
    controlButton.style.boxShadow = "0 2px 6px rgba(0,0,0,.3)";
    controlButton.style.color = "rgb(25,25,25)";
    controlButton.style.cursor = "pointer";
    controlButton.style.fontFamily = "Roboto,Arial,sans-serif";
    controlButton.style.fontSize = "16px";
    controlButton.style.lineHeight = "38px";
    controlButton.style.margin = "8px 0 22px";
    controlButton.style.padding = "0 5px";
    controlButton.style.textAlign = "center";
    controlButton.textContent = "Center Map";
    controlButton.title = "Click to recenter the map";
    controlButton.type = "button";
    // Setup the click event listeners: simply set the map to Chicago.
    controlButton.addEventListener("click", () => {
        map.setCenter(blinc);
    });
    return controlButton;
}

// Initialize and add the map
function initMap() {
    const blinc = { lat: 16.405740, lng: 120.577405 };
    // The map, centered at blinc
    map = new google.maps.Map(document.getElementById("map"), {
        zoom: 20,
        center: blinc,
    });

    // Create the DIV to hold the control.
    const centerControlDiv = document.createElement("div");
    // Create the control.
    const centerControl = createCenterControl(map);

    // Append the control to the DIV.
    centerControlDiv.appendChild(centerControl);
    map.controls[google.maps.ControlPosition.TOP_CENTER].push(centerControlDiv);
    // The marker, positioned at blinc

    new google.maps.Marker({
        position: blinc,
        map: map,
    });
}

var url = window.location.href;

if (url.includes('contact')) {
    window.initMap = initMap;
}
