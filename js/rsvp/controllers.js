
var GuestApp = angular.module('GuestApp', []);
        GuestApp.controller('GuestsListCtrl',['$scope', '$http', function($scope, $http) {
            $scope.name = "guests";

            $http.get('js/rsvp/guests.json').success(function(data, status, headers, config) {
            $scope.guests = data;
            });
    }]);

    //Phone.query(params, successcb, errorcb)

    //Phone.get(params, successcb, errorcb)

    //Phone.save(params, payloadData, successcb, errorcb)

    //Phone.delete(params, successcb, errorcb)

