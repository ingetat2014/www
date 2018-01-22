mainApp.directive('komay', function (Factory1) {

    var directive = {};
    directive.restrict = 'E';
    directive.template = "komay: <b>{{student.name}}</b> , Roll No: <b>{{student.rollno}}</b>";
    directive.scope = {
        student: "=name"
    };
    directive.compile = function (element, attributes) {
        element.css("border", "1px solid #CCC");

        //linkFunction is linked with each element with scope to get the element specific data.
        var linkFunction = function ($scope, element, attributes) {
            console.log('scope : ', $scope);
            console.log('element : ', element);
            console.log('attributes : ', attributes);
            //element.html("Student: <b>"+$scope.student.name +"</b> , Roll No: <b>"+$scope.student.rollno+"</b><br/>");
            element.css("color", "#FFF");
        };
        return linkFunction;
    };
    return directive;
});
//customDirective1
mainApp.directive('customDirective1', function () {

    var directive = {};
    directive.templateUrl= 'ng-includes/customDirective1.html';
    return directive;
});