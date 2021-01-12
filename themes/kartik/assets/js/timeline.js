$(function(){
    var inputs = $('.timeline-element .input');
    var paras = $('.timeline-element .description-flex-container').find('p');
    inputs.click(function(){
        var t = $(this);
        var ind = t.index();
        var matchedPara = paras.eq(ind);

        t.add(matchedPara).addClass('active');
        inputs.not(t).add(paras.not(matchedPara)).removeClass('active');
    });
});
