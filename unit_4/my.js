
function getAll(count_show,count_add) {
    var str = count_show;
    var strt = count_add;
        $.ajax({
                    url: "controller.php", // куда отправляем
                    type: "post", // метод передачи
                    dataType: "json", // тип передачи данных
                    data: // что отправляем
                        {str,strt},
                    error: function (req, text, error) { // отслеживание ошибок во время выполнения ajax-запроса
                            alert('Хьюстон, У нас проблемы! ' + text + ' | ' + error);
                        },
        success: function (dateAnswer) {
            console.log(dateAnswer);
            var table = '<table class="table table-hover"><thead><tr><th scope="col">Наименование</th><th scope="col">Количество</th><th scope="col">Сумма</th></tr></thead><tbody >';
            var i = 0;
            for (var key in dateAnswer) {
                table += '<tr class="rowGoods' + dateAnswer[key].id + '">';
                table += '<th>' + dateAnswer[key].nameFull + '</th>';
                table += '<td><i class="fas fa-plus addToBasket" onclick="addToBasket(' + dateAnswer[key].id + ')" data-id=' + dateAnswer[key].id + '></i>';
                table += '<div class="basketOneCount' + dateAnswer[key].id + '">' + dateAnswer[key].count + '</div>';
                table += '<i class="fas fa-minus deleteToBasket" onclick="deleteToBasket(' + dateAnswer[key].id + ')" data-id=' + dateAnswer[key].id + '></i></td>';
                table += '<td><div class="basketOneSum' + dateAnswer[key].id + '">' + dateAnswer[key].count * dateAnswer[key].price + '</div></td></tr>';
                i++;
            }
            table += $('</table>');
            var modal = $('.modal-body');
            $('.modal-body').empty();
            modal.append(table);
        }
    });
};