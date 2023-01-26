jQuery(function() {
    jQuery(".ps-display").perfectScrollbar({ wheelPropagation: !1 });
    const a = document.querySelectorAll(".ps-display"),
        b = new ResizeObserver(() => {
            jQuery(".ps-display").perfectScrollbar("update"), console.log("dropdown opened");
        });
    a.forEach((a) => {
        b.observe(a);
    });
	new LazyLoad();
});
    