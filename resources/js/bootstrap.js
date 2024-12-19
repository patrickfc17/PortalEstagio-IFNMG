import axios from 'axios'

const getAxios = () => {
  const token = localStorage.getItem('jwt')
  const customAxios = axios.create({
    baseURL: import.meta.env.VITE_API_BASE,
    timeout: 10000,
    headers: {
      'Content-Type': 'application/json',
    },
  })

  if (token)
    customAxios.defaults.headers.common['Authorization'] = `Bearer ${token}`

  return customAxios
}

window.axios = getAxios()
