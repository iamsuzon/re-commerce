
    var $select1 = $("#country"),
    $select2 = $("#district"),
    $options = $select2.find("option");

    $select1
    .on("change", function () {
    $select2.html($options.filter('[value="' + this.value + '"]'));
    })
    .trigger("change");
