import { Calendar } from '@fullcalendar/core';
import interactionPlugin from '@fullcalendar/interaction';
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';
import listPlugin from '@fullcalendar/list';
import bootstrap5Plugin from '@fullcalendar/bootstrap5';

import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-icons/font/bootstrap-icons.css';

let calendarEl = document.getElementById("calendar");
let calendar = new Calendar(calendarEl, {
    plugins: [ interactionPlugin, dayGridPlugin, timeGridPlugin, listPlugin, bootstrap5Plugin ],
    themeSystem: 'bootstrap5',
    locale: 'ja',
    headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
    },
    buttonText: {
        today: '今日',
        month: '月',
        week: '週',
        day: '日',
        list: 'リスト'
    },
    buttonHints: {
        today: "今$0",
        next: "次$0",
        prev: "前$0",
        month: "$0表示",
        week: "$0表示",
        day: "$0表示",
        list: "$0表示"
    },
    initialView: 'dayGridMonth'
});
calendar.render();
