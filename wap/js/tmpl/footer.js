$(function () {
    var a = getCookie("key");
    var e = '<div class="nctouch-footer-wrap posr">' + '<div class="nav-text">';
    if (a) {
        e += '<a href="' + WapSiteUrl + '/tmpl/member/member.html">个人中心</a>' + '<a id="logoutbtn" href="javascript:void(0);">注销</a>' + '<a href="' + WapSiteUrl + '/tmpl/member/member_feedback.html">反馈</a>'
    } else {
        e += '<a href="' + WapSiteUrl + '/tmpl/member/login.html">登录</a>' + '<a href="' + WapSiteUrl + '/tmpl/member/register.html">注册</a>' + '<a href="' + WapSiteUrl + '/tmpl/member/login.html">反馈</a>'
    }
    e += '<a href="javascript:void(0);" class="gotop">返回顶部</a>' + "</div>" + '<div class="nav-pic">' + "</div>" + '<div class="copyright">' + 'Copyright&nbsp;&copy;&nbsp;2015-2016 淘福家 版权所有' + "</div></div>";
    var n = '<div id="footnav" class="footnav clearfix"><ul>'
        + '<li><a href="' + WapSiteUrl + '"><i class="home"></i><p>首页</p></a></li>'
        + '<li><a href="' + WapSiteUrl + '/tmpl/product_first_categroy.html"><i class="categroy"></i><p>分类</p></a></li>'
        + '<li><a href="' + WapSiteUrl + '/tmpl/search.html"><i class="search"></i><p>搜索</p></a></li>'
        + '<li><a href="' + WapSiteUrl + '/tmpl/cart_list.html"><i class="cart"></i><p>购物车</p></a></li>'
        + '<li><a href="' + WapSiteUrl + '/tmpl/member/member.html"><i class="member"></i><p>个人中心</p></a></li></ul>'
        + '</div>';
    $("#footer").html(e + n);
    var a = getCookie("key");
    $("#logoutbtn").click(function () {
        var a = getCookie("username");
        var e = getCookie("key");
        var i = "wap";
        $.ajax({
            type: "get",
            url: ApiUrl + "/index.php?act=logout",
            data: {username: a, key: e, client: i},
            success: function (a) {
                if (a) {
                    delCookie("username");
                    delCookie("key");
                    location.href = WapSiteUrl
                }
            }
        })
    })
});