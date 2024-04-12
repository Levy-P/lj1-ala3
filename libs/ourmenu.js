var tab,
    filters = {kids: false, vegatarian: false, vegan: false};
let all_sections = document.getElementsByTagName('section'),
    tab_buttons = document.getElementById('tabs').children,
    html_tabs = [], tabs = [], html_buttons = [], html_sections = [];

let sections = all_sections.length, buttons = tab_buttons.length, element;
for (let i = 0; i < sections; i++) {
    element = all_sections[i];
    if (element.hasAttribute('tab')) {
        tab = element.getAttribute('tab');
        tabs.push(tab);
        html_sections.push(element);
        html_tabs[tab] = element;
    }
} for (let i = 0; i < buttons; i++) {
    element = tab_buttons[i];
    if (element.hasAttribute('tab')) {
        tab = element.getAttribute('tab');
        html_buttons[tab] = element;
    }
}

tab = 'featured'

function switchTab(new_tab, self) {
    console.log(new_tab);
    if (new_tab != tab) {
        let element = html_buttons[tab],
            section = html_sections[tabs.indexOf(tab)];
        section.setAttribute('hidden','');

        if (tabs.includes(new_tab)) {
            tab = new_tab;
        } else {
            tab = 'featured';
        }

        section = html_sections[tabs.indexOf(tab)];
        section.removeAttribute('hidden');

        self.style.borderColor = 'var(--a2)';
        self.style.backgroundColor = 'var(--a1)';
        element.style.borderColor = 'var(--a1)';
        element.style.backgroundColor = 'var(--p)';
    }
}

function switchFilter(filter, self) {
    if (Object.hasOwn(filters, filter)) {
        filters[filter] = !filters[filter];
        if (filters[filter]) {
            self.style.borderColor = 'var(--a2)';
            self.style.backgroundColor = 'var(--a1)';
        } else {
            self.style.borderColor = 'var(--a1)';
            self.style.backgroundColor = 'var(--p)';
        }
    }
}