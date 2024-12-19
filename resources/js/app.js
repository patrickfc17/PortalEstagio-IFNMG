import mask from '@alpinejs/mask'
import { initFlowbite } from 'flowbite'
import './bootstrap'

initFlowbite()

Alpine.plugin(mask)

window.Alpine = Alpine
