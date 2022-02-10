function renderDropdown(list = {}, button = 'Explore') {
    const dropdownList = Object.keys(list).map(renderDropdownList).join('');
        return `
            <div class="backdrop" data-type="dropdown-backdrop"></div>
            <div class="post-dropdown__container" data-type="dropdown-container">
                <div class="post-dropdown__placeholder" data-type="dropdown-placeholder">
                    Select an island
                </div>
                <ul class="post-dropdown__list">
                    ${dropdownList}
                </ul>
            </div>
            <a href="" class="post-dropdown__btn" data-type="dropdown-explore">${button}</a>
        `
}

function renderDropdownList(name) {
    return `<li class="post-dropdown__item" data-type="dropdown-option">${name}</li>`;
}