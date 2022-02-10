

function initDropdown(options) {
    const dropdown = document.querySelector('[data-type="dropdown"]');
    dropdown.innerHTML = renderDropdown(options, button);
    dropdown.addEventListener('click', (event) => clickHandler(event, dropdown));
}

function clickHandler(event, dropdown) {
    const {type} = event.target.dataset;
    const target = event.target;
    const options = getOptions(dropdown);

    if (type === 'dropdown-container') {
        if (options) {
            toggleDropdown(dropdown);
        }
    } else if (type === 'dropdown-option') {
        selectOption(target, options, dropdown);    
    } else if (type === 'dropdown-backdrop') {
        close(dropdown);
    }
}

const optionList = validName(list);

initDropdown(optionList);





