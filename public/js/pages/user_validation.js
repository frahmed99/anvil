!(function () {
    function e(e, a) {
        for (var r = 0; r < a.length; r++) {
            var l = a[r];
            (l.enumerable = l.enumerable || !1),
                (l.configurable = !0),
                "value" in l && (l.writable = !0),
                Object.defineProperty(e, l.key, l);
        }
    }
    var a = (function () {
        function a() {
            !(function (e, a) {
                if (!(e instanceof a))
                    throw new TypeError("Cannot call a class as a function");
            })(this, a);
        }
        var r, l;
        return (
            (r = a),
            (l = [
                {
                    key: "initValidation",
                    value: function () {
                        Codebase.helpers("jq-validation"),
                            jQuery(".user-validation").validate({
                                ignore: [],
                                rules: {
                                    first_name: {
                                        required: !0,
                                        minlength: 3,
                                    },
                                    last_name: {
                                        required: !0,
                                        minlength: 3,
                                    },
                                    user_email: {
                                        required: !0,
                                        email: !0,
                                    },
                                    user_type: {
                                        required: !0,
                                    },
                                    user_password: {
                                        required: !0,
                                        minlength: 5,
                                    },
                                    confirm_user_password: {
                                        required: !0,
                                        equalTo: "#user_password",
                                    },
                                },
                                messages: {
                                    first_name: {
                                        required: "Please enter a First Name",
                                        minlength:
                                            "First Name must consist of at least 3 characters",
                                    },
                                    last_name: {
                                        required: "Please enter a Last Name",
                                        minlength:
                                            "Last Name must consist of at least 3 characters",
                                    },
                                    user_email:
                                        "Please enter a valid email address",
                                    user_type: "Please select a User Type!",
                                    user_password: {
                                        required: "Please provide a password",
                                        minlength:
                                            "Your password must be at least 5 characters long",
                                    },
                                    confirm_user_password: {
                                        required: "Please provide a password",
                                        minlength:
                                            "Your password must be at least 5 characters long",
                                        equalTo:
                                            "Please enter the same password as above",
                                    },
                                },
                            }),
                            jQuery(".js-select2").on("change", function (e) {
                                jQuery(e.currentTarget).valid();
                            });
                    },
                },
                {
                    key: "init",
                    value: function () {
                        this.initValidation();
                    },
                },
            ]),
            null && e(r.prototype, null),
            l && e(r, l),
            a
        );
    })();
    Codebase.onLoad(a.init());
})();
