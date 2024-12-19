import mask from '@alpinejs/mask'
import Alpine from 'alpinejs'
import { initFlowbite } from 'flowbite'
import './bootstrap'

initFlowbite()

Alpine.plugin(mask)

window.Alpine = Alpine

Alpine.start()
