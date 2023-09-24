import './bootstrap';

import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse';
import { Chart } from 'chart.js';

window.Chart = Chart;
window.Alpine = Alpine;
Alpine.plugin(collapse);
Alpine.start();
