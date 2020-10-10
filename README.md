# photoregister
I wrote a photoregister using Blackboard REST API for a Learning Analytics project. The tool is being dropped, so I thought I'd add a version here in case it helps anyone else.

The start point was a widget in a Blackboard course (we use the term module) which was restricted to staff users with instructor access to the module.
The widget links to a web server, if the user has a current session they get passed to the specific module register.
If not the user has to authenticate and be authorized, then gets a list of recent modules, and the option of any module on which they are an instructor.
The photoregister page gives a simple form with photos and the option to set these to present, absent or authorised. The date is set to now by default, as is the session am/pm. The date and session can be changed.
The user selects the status of the students and submits the register.
A list of what has been submitted is returned.


