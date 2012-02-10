(function (e) {
    e.fn.extend({
        timelinexml: function (k) {
            function l() {
                this.events = [];
                this.allMonths = "Jan,Feb,Mar,Apr,May,Jun,Jul,Aug,Sep,Oct,Nov,Dec".split(",");
                this.nDays = this.nMonths = this.nYears = 0;
                this.startYear = 3E4;
                this.endYear = 0;
                var a = this;
                this.methods = {
                    loadXML: function (b) {
                        xmlhttp = window.XMLHttpRequest ? new XMLHttpRequest : new ActiveXObject("Microsoft.XMLHTTP");
                        xmlhttp.open("GET", b.src, !1);
                        xmlhttp.send();
                        xmlDoc = xmlhttp.responseXML;
                        for (var b = xmlDoc.getElementsByTagName("event"), c, h, f, g = 0; g < b.length; g++) h = e(b[g]).find("date").text().split("."), c = h[0], f = h[1], h = h[2], a.events[g] = {
                            id: g,
                            date: c,
                            year: h,
                            month: f,
                            title: e(b[g]).find("title").text(),
                            content: e(b[g]).find("content").text(),
                            link: e(b[g]).find("link").text()
                        };
                        for (g = 0; g < a.events.length; g++) if (parseInt(a.events[g].year) > a.endYear) a.endYear = parseInt(a.events[g].year);
                        for (g = 0; g < a.events.length; g++) if (parseInt(a.events[g].year) < a.startYear) a.startYear = parseInt(a.events[g].year);
                        a.nYears = a.endYear - a.startYear + 1;
                        a.nMonths = Math.ceil((d.endDate - d.startDate) / d.months);
                        a.nDays = Math.ceil((d.endDate - d.startDate) / d.days)
                    }
                }
            }
            function m() {
                this.eventPositions = [];
                this.secondWidth = this.minuteWidth = this.hourWidth = this.dayWidth = this.monthWidth = this.yearWidth = this.width = this.eventNodeWidth = 0;
                this.showMonths = this.showYears = !1;
                this.showEveryNthMonth = 1;
                this.showSeconds = this.showMinutes = this.showHours = this.showDays = !1;
                this.eventMargin = this.selectedEventContentsWidth = this.selectedEvent = this.yearId = this.yearPosition = this.monthPosition = this.monthId = this.step = this.nSmallScale = this.nLargeScale = 0;
                var a = this;
                this.methods = {
                    init: function (b) {
                        a.target = b.target;
                        b = '<div class="timeline-wrap">';
                        b += '\t<div class="timeline-events">';
                        b += '\t<div class="timeline-years timeline-large-scale"></div>';
                        b += '\t<div class="timeline-months timeline-small-scale"></div>';
                        for (var c = 0; c < d.events.length; c++) b += '\t\t<div class="timeline-event timeline-bottom" id="timeline-event-' + d.events[c].id + '">', b += '\t\t\t<div class="timeline-event-node" id="timeline-event-node-' + d.events[c].id + '"></div>', b += '\t\t\t<div class="timeline-event-contents">', b += '\t\t\t<div class="timeline-event-arrow"></div>', d.events[c].title != 0 && (b += '\t\t\t<div class="timeline-event-title"><span>' + d.events[c].date + "." + d.events[c].month + "." + d.events[c].year + "</span>" + d.events[c].title + "</div>"), d.events[c].content != 0 && (b += '\t\t\t<div class="timeline-event-content">' + d.events[c].content + "</div>"), d.events[c].link != 0 && (b += '\t\t\t<div class="timeline-event-link"><a href="' + d.events[c].link + '">' + d.events[c].link + "</a></div>"), b += "\t\t\t</div>", b += "\t\t</div>";
                        b += "\t</div>";
                        b += "</div>";
                        a.target.html(b);
                        a.width = e(".timeline-wrap").outerWidth();
                        a.yearWidth = a.width / d.nYears;
                        a.monthWidth = a.yearWidth / 12;
                        a.dayWidth = a.monthWidth / 30;
                        a.eventNodeWidth = e(".timeline-event-node").first().outerWidth();
                        if (a.monthWidth < 1E3) a.showMonths = !0, a.showEveryNthMonth = 1;
                        if (a.monthWidth < 35) a.showMonths = !0, a.showEveryNthMonth = 2;
                        if (a.monthWidth < 15) a.showMonths = !0, a.showEveryNthMonth = 3;
                        if (a.monthWidth < 10) a.showMonths = !0, a.showEveryNthMonth = 4;
                        if (a.monthWidth <= 6.5) a.showMonths = !0, a.showEveryNthMonth = 6;
                        if (a.monthWidth <= 4.5) a.showMonths = !1;
                        a.showYears = a.yearWidth > a.width ? !1 : !0;
                        a.nLargeScale = d.nYears;
                        a.nSmallScale = d.nMonths;
                        a.step = a.monthWidth / 30;
                        a.methods.setData()
                    },
                    setData: function () {
                        var a = 0,
                            c = 0,
                            h;
                        for (h in d.events) a = e("#timeline-event-" + d.events[h].id), c = a.find(".timeline-event-contents"), c.css({
                            opacity: 1
                        }).show(), a.data({
                            smallWidth: c.outerWidth(),
                            margin: -20
                        }), c.hide().css({
                            opacity: 1
                        })
                    },
                    addDates: function () {
                        if (a.showYears) for (var b = 0; b < d.nYears + 1; b++) {
                            if (b < d.nYears) for (var c = 0; c < 12; c++) a.methods.addMonth();
                            a.methods.addYear()
                        }
                    },
                    addMonth: function () {
                        a.monthId % 12 != 0 && a.showMonths && (a.monthId % a.showEveryNthMonth == 0 ? e(".timeline-months").append('<div class="timeline-month timeline-dateblock" id="timeline-month-' + a.monthId + '">' + d.allMonths[a.monthId % 12] + "</div>") : e(".timeline-months").append('<div class="timeline-month timeline-dateblock" id="timeline-month-' + a.monthId + '"></div>'), e("#timeline-month-" + a.monthId).css({
                            left: i.lim(a.monthPosition, 0, a.width)
                        }));
                        a.monthPosition += a.monthWidth;
                        a.monthId++
                    },
                    addYear: function () {
                        a.showYears && (e(".timeline-years").append('<div class="timeline-year timeline-dateblock" id="timeline-year-' + a.yearId + '">' + (d.startYear + a.yearId) + "</div>"), e("#timeline-year-" + a.yearId).css({
                            left: i.lim(a.yearPosition, 0, a.width - 1)
                        }));
                        a.yearPosition += a.yearWidth;
                        a.yearId++
                    },
                    positionEvents: function () {
                        for (var b = 0, c = 0; c < d.events.length; c++) {
                            b = a.monthWidth * (d.events[c].month - 1) + parseInt(a.yearWidth * (parseInt(d.events[c].year) - parseInt(d.startYear))) - 6 + parseInt(a.dayWidth * (parseInt(d.events[c].date) - 1));
                            a.eventPositions[c] = b;
                            for (var h = 0; h < a.eventPositions.length - 1; h++) if (Math.abs(a.eventPositions[h] - b) < a.eventNodeWidth) var f = a.eventPositions[h] - b,
                                b = f > 0 ? b - (a.eventNodeWidth + f) : b + (a.eventNodeWidth + f);
                            a.eventPositions[c] = b;
                            e("#timeline-event-" + d.events[c].id).css({
                                left: b
                            })
                        }
                    },
                    showEvent: function (b) {
                        var b = e("#" + b),
                            c = b.find(".timeline-event-contents");
                        if (a.methods.needMargin(b, b.data("smallWidth")) && !b.hasClass("timeline-selected")) {
                            var d = a.methods.getMargin(b, b.data("smallWidth"));
                            b.data({
                                margin: d
                            });
                            c.css({
                                "margin-left": d
                            });
                            b.find(".timeline-event-arrow").css({
                                "margin-left": -d - 20
                            })
                        }
                        a.methods.aboveTimeline(b) ? b.addClass("timeline-above").addClass("timeline-hover").find(".timeline-event-contents").fadeIn(200) : b.addClass("timeline-hover").find(".timeline-event-contents").fadeIn(200)
                    },
                    hideEvent: function (a) {
                        e("#" + a).removeClass("timeline-hover").find(".timeline-event-contents").fadeOut(200, function () {
                            e(this).closest(".timeline-above").removeClass("timeline-above")
                        })
                    },
                    selectEvent: function (b) {
                        var c = b.find(".timeline-event-contents");
                        b.removeClass("timeline-above").addClass("timeline-selected").removeClass("timeline-hover");
                        a.selectedEvent = b;
                        a.selectedEventContentsWidth = c.width();
                        c = -20;
                        a.methods.needMargin(b, 424) && (c = a.methods.getMargin(b, 424));
                        b.data({
                            margin: c
                        });
                        b.find(".timeline-event-arrow").animate({
                            "margin-left": -c - 20
                        }, 100);
                        b.find(".timeline-event-contents").fadeIn(200).animate({
                            width: 400,
                            "margin-left": c
                        }, 100, function () {
                            b.find(".timeline-event-content").slideDown(200);
                            b.find(".timeline-event-link").fadeIn(200)
                        })
                    },
                    deselectEvent: function () {
                        var b = e(".timeline-wrap").find(".timeline-selected");
                        a.methods.hideEvent(b.attr("id"));
                        b.removeClass("timeline-selected");
                        b.find(".timeline-event-content").slideUp(200, function () {
                            b.find(".timeline-event-contents").animate({
                                width: b.data("smallWidth") - 24
                            }, 200)
                        });
                        b.find(".timeline-event-link").fadeOut(200);
                        a.selectedEvent = 0
                    },
                    aboveTimeline: function (b) {
                        b.find(".timeline-event-contents");
                        var c = e(".timeline-wrap"),
                            d = b.offset().left - c.offset().left + b.data("margin");
                        return a.selectedEvent != 0 && !b.hasClass("timeline-selected") && (c = a.selectedEvent.offset().left - c.offset().left, d + b.data("smallWidth") > c + a.selectedEvent.data("margin") && d < c + a.selectedEvent.find(".timeline-event-contents").outerWidth() + a.selectedEvent.data("margin")) ? !0 : !1
                    },
                    needMargin: function (b, c) {
                        return b.position().left + c > a.width ? !0 : !1
                    },
                    getMargin: function (b, c) {
                        return -b.position().left - c + a.width
                    }
                }
            }
            function n() {
                this.selectedEventContentsWidth = 0;
                root = this;
                this.methods = {
                    setDOMEvents: function () {
                        e(".timeline-event-node").on("click", function () {
                            f.selectedEvent == 0 ? f.methods.selectEvent(e(this).parent()) : e(this).parent().hasClass("timeline-selected") ? f.methods.deselectEvent(e(this).parent()) : (f.methods.deselectEvent(e(".timeline-selected")), f.methods.selectEvent(e(this).parent()))
                        });
                        e(".timeline-event-node").on("mouseover", function () {
                            e(".timeline-selected").length == 0 && f.methods.hideEvent(e(".timeline-hover").attr("id"));
                            e(this).closest(".timeline-event").hasClass("timeline-hover") || f.methods.showEvent(e(this).closest(".timeline-event").attr("id"))
                        });
                        e(".timeline-event-node").on("mouseout", function () {
                            e(this).closest(".timeline-event").hasClass("timeline-selected") || f.methods.hideEvent(e(this).closest(".timeline-event").attr("id"))
                        });
                        e(document).on("click", function (a) {
                            root.selectedEvent != 0 && e(a.target).closest(".timeline-wrap").length == 0 && f.methods.deselectEvent()
                        })
                    }
                }
            }
            var d, f, j, o = e.extend({}, k),
                i = {
                    lim: function (a, b, c) {
                        a < b ? a = b : a > c && (a = c);
                        return a
                    }
                };
            return this.each(function () {
                d = new l;
                f = new m;
                j = new n;
                d.methods.loadXML({
                    src: o.src
                });
                f.methods.init({
                    target: e(this)
                });
                f.methods.addDates();
                f.methods.positionEvents();
                j.methods.setDOMEvents()
            })
        }
    })
})(jQuery);
window.log = function () {
    log.history = log.history || [];
    log.history.push(arguments);
    if (this.console) {
        arguments.callee = arguments.callee.caller;
        var a = [].slice.call(arguments);
        typeof console.log === "object" ? log.apply.call(console.log, console, a) : console.log.apply(console, a)
    }
};
(function (a) {
    function c() {}
    for (var d = "assert,clear,count,debug,dir,dirxml,error,exception,firebug,group,groupCollapsed,groupEnd,info,log,memoryProfile,memoryProfileEnd,profile,profileEnd,table,time,timeEnd,timeStamp,trace,warn".split(","), b; b = d.pop();) a[b] = a[b] || c
})(function () {
    try {
        return console.log(), window.console
    } catch (a) {
        return window.console = {}
    }
}());
jQuery(document).ready(function () {
    jQuery("#my-timeline").timelinexml({
        src: "/wp-content/themes/olresponsive/timeline.xml"
    })
});