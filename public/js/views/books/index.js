const tabs = document.querySelectorAll('[data-nav-tab]')

const resetTabs = () => {
    tabs.forEach((tab) => {
        tab.classList.remove('active')
    })
}

const activateTab = (tab) => {
    tab.classList.add('active')
}

const init = (id) => {
    console.log(id)
}

const switchTag = (event) => {
    const tab = event.target
    const tabId = tab.getAttribute('data-nav-tab')

    resetTabs()
    activateTab(tab)

    init(tabId)

    // const containers = document.querySelectorAll('[data-nav-container]')

    // containers.forEach((container) => {
    //     const containerId = container.getAttribute('data-nav-container')

    //     containerId == tabId ? container.classList.remove('hidden') : container.classList.add('hidden')
    // })
}

tabs.forEach((tab) => {
    tab.addEventListener('click', switchTag)
})