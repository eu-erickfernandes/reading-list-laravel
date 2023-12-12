const tabs = document.querySelectorAll('[data-nav-tab]')

const resetTabs = () => {
    tabs.forEach((tab) => {
        tab.classList.remove('active')
    })
}

const activateTab = (tab) => {
    tab.classList.add('active')
}

const init = () => {
    const currentTab = document.querySelector('[data-nav-tab].active')
    const tabId = currentTab.getAttribute('data-nav-tab')
    
    const containers = document.querySelectorAll('[data-nav-container]')
    
    containers.forEach((container) => {
        const containerId = container.getAttribute('data-nav-container')

        containerId == tabId ? container.classList.remove('hidden') : container.classList.add('hidden')
    })
}

const switchTag = (event) => {
    const tab = event.target

    resetTabs()
    activateTab(tab)

    init()
}

tabs.forEach((tab) => {
    tab.addEventListener('click', switchTag)
})

init()