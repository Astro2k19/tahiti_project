function getOptions(root) {
    return root.querySelectorAll('[data-type="dropdown-option"]');
}

function getState(dropdown) {
    return dropdown.dataset.state;
}

function setNewState(element,attribute, value) {
    element.setAttribute(attribute, value);
}

function toggleDropdown(dropdown) {
    const state = getState(dropdown);
    state === 'closed' ? open(dropdown) : close(dropdown);
}

function open(dropdown) {
    setNewState(dropdown, 'data-state', 'open');
}

function close(dropdown) {
    setNewState(dropdown, 'data-state', 'closed');
}

function selectOption(target, options, dropdown) {
    const text = target.textContent;
    clear(options);
    setNewState(target, 'data-state', 'selected');
    setPlaceholder(dropdown, text);
    setExploreLink(dropdown, text);
    close(dropdown);
}
function setExploreLink(dropdown, text) {
    const exploreBtn = dropdown.querySelector('[data-type="dropdown-explore"]');
    const link = list[text];
    exploreBtn.href = link;
}

function setPlaceholder(dropdown, text) {
    const placeholder = dropdown.querySelector('[data-type="dropdown-placeholder"]');
    placeholder.textContent = text;
}

function clear(options) {
    options.forEach(option => setNewState(option, 'data-state', ''));
}

function validName(list = {}) {
    Object.keys(list).forEach(key =>{
        if (key.match(/&#8217;/)) {
            const value = list[key];
            const newkey = key.replace(/&#8217;/, "'");
            delete list[key];
            list[newkey] = value;
        }
    });
    return list;
}
