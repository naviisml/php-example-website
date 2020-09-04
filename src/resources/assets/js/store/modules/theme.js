const theme = 'light'

const themes = [
    'light',
    'dark'
]

// state
export const state = {
    theme: localStorage.getItem('theme') || theme,
    themes: themes
}

// getters
export const getters = {
    theme: state => state.theme,
    themes: state => state.themes
}

// mutations
export const mutations = {
    ["SET_THEME"] (state, { theme }) {
        state.theme = theme
    }
}

// actions
export const actions = {
    setTheme ({ commit }, { theme }) {
        commit("SET_THEME", { theme })

        localStorahe.setItem('theme', theme, { expires: 365 })
    }
}