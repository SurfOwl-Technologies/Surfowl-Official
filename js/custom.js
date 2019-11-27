var TxtType = function (t, i, e)
{
	this.toRotate = i, this.el = t, this.loopNum = 0, this.period = parseInt(e, 10) || 2e3, this.txt = "", this.tick(), this.isDeleting = !1
};
TxtType.prototype.tick = function ()
{
	var t = this.loopNum % this.toRotate.length,
		i = this.toRotate[t];
	this.isDeleting ? this.txt = i.substring(0, this.txt.length - 1) : this.txt = i.substring(0, this.txt.length + 1), this.el.innerHTML = '<span class="wrap">' + this.txt + "</span>";
	var e = this,
		n = 200 - 100 * Math.random();
	this.isDeleting && (n /= 2), this.isDeleting || this.txt !== i ? this.isDeleting && "" === this.txt && (this.isDeleting = !1, this.loopNum++, n = 500) : (n = this.period, this.isDeleting = !0), setTimeout(function ()
	{
		e.tick()
	}, n)
}, window.onload = function ()
{
	for (var t = document.getElementsByClassName("typewrite"), i = 0; i < t.length; i++)
	{
		var e = t[i].getAttribute("data-type"),
			n = t[i].getAttribute("data-period");
		e && new TxtType(t[i], JSON.parse(e), n)
	}
	var o = document.createElement("style");
	o.type = "text/css", o.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}", document.body.appendChild(o)
}, $(document).ready(function ()
{
	$("#web").click(function ()
	{
		window.location.href = "web-solutions.html"
	}), $("#dm").click(function ()
	{
		window.location.href = "digital-marketing.html"
	}), $("#infographics").click(function ()
	{
		window.location.href = "web-solutions.html"
	}), $("#web-design-dev").click(function ()
	{
		window.location.href = "plans.html"
	}), $("#logo-and-infographics").click(function ()
	{
		window.location.href = "plans.html"
	}), $("#digital-marktng").click(function ()
	{
		window.location.href = "plans.html"
	})
}), $(document).ready(function ()
{
	$(".sidebar-contact").toggleClass("active"), $(".toggle").click(function ()
	{
		$(".sidebar-contact").toggleClass("active"), $(".toggle").toggleClass("active")
    })
    
    $('.first-button').on('click', function () {

        $('.animated-icon1').toggleClass('open');
    });


}), $(window).scroll(function ()
{
	$(this).scrollTop() >= 50 ? $("#return-to-top").fadeIn(200) : $("#return-to-top").fadeOut(200)
}), $("#return-to-top").click(function ()
{
	$("body,html").animate(
	{
		scrollTop: 0
	}, 500)
});