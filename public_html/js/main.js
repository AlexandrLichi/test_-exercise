
$('#send').click(() => {
  

    $.ajax({
      type: "POST",
      dataType: "json",
      data: {
        action: "test",
        name: $("input[name=name]").prop("value"),
        message: $("textarea[name=message]").prop("value"),
      },
      
      success: function (msg) {
        $(".result").html((i, orign) => {
          return `${orign}<div class="row">
                        <p>Дата: ${msg.date}</p>
                        <p>Имя: ${$("input[name=name]").prop("value")}</p>
                        <p>Сообщение:${$("textarea[name=message]").prop(
                          "value"
                        )}</p>
                    </div>`;
        });
      },
    });
});
