!function(){"use strict";$('[data-toggle="daterangepicker"]').each(function(){var a=$(this),e=void 0!==a.data("daterangepicker-locale-format")?a.data("daterangepicker-locale-format"):"YYYY-MM-DD",t={Today:[moment(),moment()],Yesterday:[moment().subtract(1,"days"),moment().subtract(1,"days")],"Last 7 Days":[moment().subtract(6,"days"),moment()],"Last 30 Days":[moment().subtract(29,"days"),moment()],"This Month":[moment().startOf("month"),moment().endOf("month")],"Last Month":[moment().subtract(1,"month").startOf("month"),moment().subtract(1,"month").endOf("month")]},r={showDropdowns:void 0!==a.data("daterangepicker-show-dropdowns")&&a.data("daterangepicker-show-dropdowns"),drops:void 0!==a.data("daterangepicker-drops")?a.data("daterangepicker-drops"):"down",opens:void 0!==a.data("daterangepicker-opens")?a.data("daterangepicker-opens"):"right",startDate:void 0!==a.data("daterangepicker-start-date")?a.data("daterangepicker-start-date"):moment(),endDate:void 0!==a.data("daterangepicker-end-date")?a.data("daterangepicker-end-date"):moment().add(1,"month"),singleDatePicker:void 0!==a.data("daterangepicker-single-date-picker")&&a.data("daterangepicker-single-date-picker"),autoApply:void 0===a.data("daterangepicker-auto-apply")||a.data("daterangepicker-auto-apply"),timePicker:void 0!==a.data("daterangepicker-time-picker")&&a.data("daterangepicker-time-picker"),timePicker24Hour:void 0!==a.data("daterangepicker-time-picker-24-hour")&&a.data("daterangepicker-time-picker-24-hour"),ranges:void 0!==a.data("daterangepicker-ranges")&&t,locale:{format:e,separator:void 0!==a.data("daterangepicker-locale-separator")?a.data("daterangepicker-locale-separator"):" to "}};a.daterangepicker(r)})}();