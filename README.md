Install the repo in a directory off your webroot. As long as you have PHP installed, you should be able to run the application.

Assuming the application is running on your localhost, this URL gets you to the main screen: http://localhost/[directory you specified].

Instead of mocking up weather data within the server code, I wrote the server code to utilize a free weather API. The API Key is set within the server code and does not need to be configured in order to use the app. For more information on the weather API, go here - https://developer.forecast.io/.

The app uses PHP on the server-side and Jquery client-side for making ajax calls to the PHP component to get weather data for a set of 10 cities for display on the screen.

While the app meets the provided functional requirements, it is by no means production ready. The following would need to be addressed in order to view this as anything more than a POC:

* Both server-side and client-side error handling needs to be added to ensure that the application fails gracefully, providing a good user experience.
* There are probably performance optimizations that could be made around pulling weather data for multiple cities in one call to the API rather than the current implementation which pulls only one city at a time.
* The user experience and visual design are currently very basic. Both could use significant improvements in terms of messaging conditions to the user as well as making the visual presentation much more engaging.
* There is certainly additional data points (e.g., time, weather trends for the day, weather trends for the week) that could be displayed for each city that would make the application more useful to a user.
