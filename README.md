Yopp
====

Have you ever spent more than 1 second wondering:

*"How do I get on my computer this photo I just made with my phone?"*

or

*"How do I get this PDF from my computer to my phone?"*

Then you probably thought:

* Let's use Dropbox! ... oh no I'm not logged in on my phone, but what is my password again?

* Well, let's send the file to myself via email!

* I should just use a USB cable... but where is my USB cable again?

You can forget about this and use **Yopp** instead:

<img src="https://i.imgur.com/QzpdbzA.gif" />


Installation
----
Create a folder on your server and put `index.php` there, that's it! (Don't forget to give write permission to this folder).

How does it work?
----

* Only **one** file will stay on the server, so each time you upload a new file, the previous file will be deleted.

* By default, the file will be deleted on server after it has been downloaded once.

Minimalist UX
----

This tool requires a **total number of 7 actions** to get the work done:

    Open browser on phone [1 tap], Open page [1 tap if in bookmarks], UPLOAD [1 tap], Choose the file [1 action]
    Open browser on computer [1 double click], Open page [1 click if in bookmarks], DOWNLOAD [1 click]
    
I'll be happy to switch to another tool if one requiring less actions exists.

I noticed that my likelihood/probability to use any tool (all other things being equal) is more or less proportional to:

    P = 1 / a^2
    
where `a` is the number of required actions/user inputs. If the number of required actions is doubled, the likelihood to use the tool is divided by 4!


What about security?
----

* There's no security, so everyone who has the URL can download your last file (well, not if you downloaded it, because then it will be automatically deleted on server). Why? Because sometimes you just want a quick solution for non-sensitive/personal data, rather than a super secure solution that would take 2 minutes (go to Gmail on phone, enter login, enter password, upload file, go to Gmail on computer, enter login, enter password, download the file...)

* Tip: use a random folder name (e.g. http://www.example.com/xHsy279q1/), and don't share the URL

* There's only ~ 100 lines of PHP code, so you can easily read it or tweak it yourself!

About
----

Author: Joseph Ernest ([@JosephErnest](https://twitter.com/JosephErnest))

Other projects: [BigPicture](http://bigpicture.bi), [bigpicture.js](https://github.com/josephernest/bigpicture.js), [AReallyBigPage](https://github.com/josephernest/AReallyBigPage), [SamplerBox](http://www.samplerbox.org), [Void](http://www.thisisvoid.org), [TalkTalkTalk](https://github.com/josephernest/TalkTalkTalk), [Writing](https://github.com/josephernest/writing), [YellowNoiseAudio](http://www.yellownoiseaudio.com), etc.

License
----
MIT license
