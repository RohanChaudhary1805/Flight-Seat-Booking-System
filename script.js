/**
 * index.js
 */
window.onload = function() {
    const one_way_bt = document.getElementById('one-way');
    const two_way_bt = document.getElementById('return');
    const calender_box = document.getElementById('info-box-calender');
    let trip_type = -1; 

    one_way_bt.addEventListener('click', function() {
        if (trip_type == -1) {
            let input_date = document.createElement("input");
            input_date.setAttribute('type', 'date');
            calender_box.appendChild(input_date);
            trip_type = 1;
        } else if (trip_type == 2) {
            calender_box.removeChild(calender_box.lastChild);
            trip_type = 1;   
        }
    });
    two_way_bt.addEventListener('click', function () {
        if (trip_type == -1) {
            let input_date = document.createElement("input");
            input_date.setAttribute('type', 'date');
            let input_date_2 = document.createElement("input");
            input_date_2.setAttribute('type', 'date');
            calender_box.appendChild(input_date);
            calender_box.appendChild(input_date_2);
            trip_type = 2;
        } else if (trip_type == 1) {
            let input_date = document.createElement("input");
            input_date.setAttribute('type', 'date');
            calender_box.appendChild(input_date);
            trip_type = 2;
        }
    });
};