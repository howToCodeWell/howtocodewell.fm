
Peter Fisher: [00:00:00] Welcome to the [How To Code Well podcast](http://howtocodewell.fm) a show all about web development and programming. My name is Peter Fisher. I am a freelance web and mobile applications developer.
Hello coders and welcome to another How To Code Well podcast today we're going to be talking about learning React.  I have the pleasure of being joined by Kyle Cook. Hi Kyle. How's it going? Have you had a good week so far? 

Kyle Cook: [00:00:41] Yeah,  I mean, it's been great. It's only Tuesday, but it isn't only so far.

Peter Fisher: [00:00:44] It's only Tuesday, but this show goes out on a Friday, so. 

Kyle Cook: [00:00:49] Well, everybody else is luckier than me then. 

Peter Fisher: [00:00:51] Yeah, right because you'll be hearing this now and it'll be closer to the weekend. So how's things going? You've got the  YouTube channel [Webdev Simplified](https://www.youtube.com/webdevsimplified). How's things going with that?

Kyle Cook: [00:01:03] It's going really great. Yeah, since you had me on last time the channel is growing a lot. I've got a lot of good feedback and i've been able to make more and more videos quicker, which is just been amazing. So it's really well. 

Peter Fisher: [00:01:12] Yeah, you're doing really well on that channel. It's got a big audience.

It's going really well. I'm so pleased for you and we mentioned before the  interview here that it was February that we last spoke. So it's in a short piece of time that it's grown really well. 
You've recently done a course as well called [Learn React Today](http://bit.ly/2ndUMpu). Is that is that right? 

Kyle Cook: [00:01:38] Yep, correct.
Yeah, I decided to take my approach of simplifying concepts and apply it to React because I love React and use it all the time. So I figured why not take that simplified approach and try to teach react to people in a short time frame as opposed to a long time frame. 

Peter Fisher: [00:01:52] Yeah, that sounds super cool.
I've got links in the show notes below of this course as well if anybody's interested, but before we talk about the course, let's first talk about React. 
So in your opinion, what is React? What is the whole point of React? 

Kyle Cook: [00:02:13] So kind of the idea of React is it is technically it's a library, but you can call it a framework. It really doesn't matter. But the idea of React is to make building front end UI's and especially user experiences much easier because you have the idea of components and in React instead of like in traditional JavaScript and jQuery if you want to create interaction, you have to kind of react to events and then you update everything manually and then you have to make sure you don't forget to update everything.
But with react you have components which kind of just take care of themselves and each component is an individual part of your website. So that's kind of where we act differs from normal javaScript is it's about building components and you define what the component looks like and then it will just update itself when things change instead of you manually updating it yourself.

Peter Fisher: [00:02:59] Yeah. So yeah, I've played a bit with React and it's the components the components are the thing - the key, isn't it? It's so flexible. You can create your own components you can define what they are and how they behave. 
So, okay. What else can you do with React? We've just mentioned components. Is there anything else that you can do? 

Kyle Cook: [00:03:22] So React can kind of - I mean you can really do anything that you can do with vanilla JavaScript with React. It's just that you don't really want to do everything in React because react is more specific to building things out that are more complex on the front end.
Like if you have an application that's just a bare bones front end and it's mostly just forms submitting to a back-end. 

Peter Fisher: [00:03:42] Yeah

Kyle Cook: [00:03:42] Then react doesn't really make sense. But when you have that more complex. Having the ability to break things into components is really useful and that's kind of how all of the popular front-end frameworks work is they're all component-based. They just have their own approaches as to how you build your code and React as more JavaScript focused. So it's more about building JavaScript. While the other ones are more about setting up a framework for you that does a lot of the work behind the scenes. 
Peter Fisher: [00:04:06] Mmm. So, are you saying that React is a bit more modular? Compared to other Frameworks?

Kyle Cook: [00:04:12] Um, it depends I think with React there's not really a like set way to structure your code. Like you have components and react tells you how to make components and how we're component should talk to each other but how you actually set up your folders and how you manage your CSS. That's all kind of up to you. While when most other frameworks they have a very set way of this is where your CSS goes. This is where your components go. So React kind of gives you more freedom but with that freedom, you also have to you know, with responsibility, you know, you need to make sure you take care of all that extra power that you have with extra responsibilities.

Peter Fisher: [00:04:42] Right? So you're not essentially being bound into some sort of thing that you have to conform to you can take the component in any kind of direction you want. Yeah. I dig that. 
Does it follow any kind of sort of standards or conventions or anything? 

Kyle Cook: [00:05:00] Like what kind of standards are you talking about? Do you like specific React ones or like something outside of React? 
Peter Fisher: [00:05:04] Yeah. Does it have any have any standards itself? 
Kyle Cook: [00:05:08] So the most part react tries to stay away from making any hard and fast standards. There's certain like patterns that have emerged from React and a lot of times the really popular patterns will get rolled up into the language itself show so they try to take really popular patterns and make them easier.
So it's kind of more like a design pattern idea is what React is built on as opposed to like here is how you do things. 

Peter Fisher: [00:05:31] Right, yeah, okay, I get that. So, okay. What kind of applications  would you typically use React with? 

Kyle Cook: [00:05:42] So like I talked about earlier, heavy user interaction applications are like the prime example for react but also any single page application you make building it with react is going to make it so much easier because that's really difficult to do with vanilla JavaScript.
But if you use react it kind of is made for single page applications, especially when you start adding and React router which allows you to do all of your routing really easily. So it kind of just takes care of the single page-ness for you. And all you have to do is handle how everything looks but you can even use React for things  beyond just those specific use cases because they have a thing called React native which allows you to build mobile apps with React.
You can also use Electron with react so you can make desktop applications. There's even a person that made a Steam game using React which just blows my mind. 

Peter Fisher: [00:06:27] Wow. 

Kyle Cook: [00:06:27] You can use it for a lot of things. 

Peter Fisher: [00:06:28] Okay. Yeah, I dig the single page application. I've played around with Gatsby and that changed my way of thinking about creating a web page because I could create a web application within a single page.
If that kind of makes sense, you know pulling in things from GraphQL left right and center. Then using the  router,  the React router was very nice and easy to play with. Actually I wouldn't say it was easy, but it was  nice to use and  it was adaptable as well. So you didn't feel like you were forced into 'this is the way it needs to happen'.  It was very flexible.
So what is it like being a React developer? 
I mean React kind of seen as this trendy kid? Right. Is it is that how it feels when you're writing React?

Kyle Cook: [00:07:29] I don't really think so. I think react is at the point where it's really quite stable. It's been around for long enough and there's a really huge base around React. So many people use it that there's so many standards and like best practices that people use.
I think it has a very stable feeling to it as opposed to maybe if you like did something in Svelte which is a newer framework that has much more of that wild west kind of you just don't know exactly what's the best way to do things. 

Peter Fisher: [00:07:55] Right.

Kyle Cook: [00:07:55] And I think the other thing about building React apps which is why I enjoy it so much is it's a lot more like starting a new app all the time because the best part about programming is when you start something fresh. Like nobody wants to work on that ten-year-old app. You want to start something cool and new and fresh give it your own ideas and with components it's really easy because each component is almost like starting your own little mini application because that new component is fresh. It's not tied to anything else you can kind of start from scratch almost every time which makes it a lot of fun. 

Peter Fisher: [00:08:23] Sure. Is there any pain points of using React? Is there any kind of areas that people find most difficult doing? 

Kyle Cook: [00:08:33] Yeah, I think the biggest one of the biggest advantages is also one of the biggest pain points is that there is no set framework of how you structure everything.
So you kind of need to find out for you what works best as well as kind of some best practices. So takes a little bit more research and practice and just experimenting to figure out how the best way to do things is because you could do it a hundred different ways, but probably ten of those are better than the other 90 so finding those 10 is I think one of the hardest things about React.

Peter Fisher: [00:08:59] So I was a bit of trial and error. Is that what you're saying? 

Kyle Cook: [00:09:02] Yeah. 

Peter Fisher: [00:09:02] Yeah. 

Kyle Cook: [00:09:02] Yeah, like when I first started with React I was very like I knew how to do things with react, but I really wasn't sure like the best practices of how to do things and as I just started developing more and reading more and watching videos, I was like, okay, this is why I need to do it this way.

Peter Fisher: [00:09:17] Yeah. Yeah. Yeah, I remember when I was playing with  React and it was like, you know, you come from a world where this is how it should be done, right. And you expect that to be the case and then you're given this open book of possibilities. And you feel like you know, you're doing things a bit naughty by not following any kind of sort of structured convention.
Obviously, you have the framework to work within but it felt a little bit dirty doing a couple of React things but they actually paid off in the end and it made things a lot easier to work with. And it ended up becoming quite snappy and efficient actually, which I really really enjoyed playing with . 
Is there any skills though that are required to learn React. Let's say for example, if you were fresh out of boot camp or what have you is there anything that you would advise people to learn before touching React? 

Kyle Cook: [00:10:26] Yeah, definitely. I mean you have the basics where you need to know the basics of HTML and the basics of CSS.
Just because you're going to be using HTML and CSS. And then when it comes to JavaScript as where you have a little bit more specifics on what you need to know. 

Peter Fisher: [00:10:39] Yeah

Kyle Cook: [00:10:39] I think having at least intermediate skills in JavaScript is important like you've built. Maybe you've built some applications on your own.
So you kind of know the pain points of building user interaction in vanilla JavaScript because if you just jump right into React about building a bunch of projects in normal JavaScript, you kind of lose out on why react is so important and how it solves so many problems for you. 

Peter Fisher: [00:11:01] Yeah.

Kyle Cook: [00:11:01] And also react to uses a lot of, like a lot of the best practices and React to use ES6 or beyond features in them. So like the rest operator the spread operator, you have object de-structuring and all that kind of stuff which is really something that you may not know jumping into React. 
So I really highly advise people learn the basics of ES6 like promises you need to know classes and that kind of stuff just the basics of ES6.

Peter Fisher: [00:11:25] Yeah, I guess if someone didn't know HTML, JavaScript and CSS and went straight to React they have that sort of weird idea that everything is like this and then if they went to something else it would be a little bit weird, a little bit strange.  Am I right in saying that React is itself its own ecosystem in the sense that it conforms to these components and you can split components out into little sort of sub components and stuff. It is very React-esque. 
Do you concur?

Kyle Cook: [00:11:59] Yeah. Definitely. 

I think a lot of the Frameworks kind of share a similar ecosystem of whether component-based like if you learn React i think it's an easy jump to go to Vuejs or Angular or one of the other frameworks because you'll the component mindset is also one of the hardest things to learn is like how to think in components because when you're building normal applications, you're like, okay, here's all my HTML and now here's all my CSS and all my JavaScript and in React it's like here's my HTML JavaScript and CSS for my button and now here's the HTML CSS JavaScript for something else. That's kind of a different mindset. 

Peter Fisher: [00:12:30] Yeah. Definitely, it totally takes you out of that sort of like all my CSS is in one file and all my JavaScript is an another file and my HTML pulls in those two things.
It is itself in itself and it gets a little bit crazy when you start having components and components and components. Yeah. 

Kyle Cook: [00:12:50] Yeah know the first few React applications. I made like my components were big components there like one page was one component and I had to slowly be like, okay this is not how we React works. Like I had my old mindset. I was trying to apply it to React and you really need to warp your mindset to the new component mindset. 

Peter Fisher: [00:13:05] Yeah, cool. So I mean, how long have you been doing React for?

Kyle Cook: [00:13:12] I've been doing react for about a year and a half now I want to say I started yeah about a year to year and a half ago . I really just jumped into it at work one day my boss looked at my code and was like.
Why are you making your own framework? Like why don't you use React and I was like what's React? So I learned React and I was like, oh my gosh, why have I been doing this manually the whole time because I was literally building like my own framework. And so it has been great since then. 

Peter Fisher: [00:13:36] That's a good way to go because when you start writing your own framework you start to experience the pain points that lots of people who've done the same thing get and you have more of an appreciation as to how these frameworks are actually put together because a lot of the questions have been solved because a lot of the questions have been asked already. Yeah, you don't just kind of like expect it to work.
So yeah, I'm totally digging the creating of a framework. I created my own framework for PHP once and I was very stubborn. I was like no I'm going to use this. This is what I'm going to use it for. Until discovered  things like Symfony and CakePHP and then it was like, right that's going straight in the bin.

Kyle Cook: [00:14:25] Yep, that's exactly how my code was. 

Peter Fisher: [00:14:27] But you got an understanding for things like sessions and you know cookie management and all of that stuff, you know, you got an appreciation for how data hangs together and designing and architecting a system. 
So yeah, is that something that you would recommend people do?

Kyle Cook: [00:14:45] Er no, I don't think so, like it was a lot of work and while it does really give you like the appreciation you get for a framework like React is multiplied if you build your own my from scratch. 

Peter Fisher: [00:14:57] Oh, yeah. Yeah. 

Kyle Cook: [00:14:58] I don't think it's really worth it. Unless you really want to learn the inner workings of a framework because  building your own will give you that idea.
But I think if you just want to be a React developer going the route of making your own framework, it takes a long time and it's not really the skills that will apply super well to react it'll just make you really appreciate it when you start working with it. 

Peter Fisher: [00:15:16] That's super true that's super true. I mean why make more work for yourself, right?

Kyle Cook: [00:15:21] Yeah. Definitely. 

Peter Fisher: [00:15:22] Yeah. Yeah. Okay. Let's let's move now into  the course. So I mentioned the course before but first of all, what is the course called? Let's start with that. 

Kyle Cook: [00:15:33] Yeah, so the course is called [Learn React Today](http://bit.ly/2ndUMpu) and kind of the idea of the name is that the course is small enough that you can consume the entire course in one day if you are really adamant and just went through hard which is kind of my idea.

I want to make it as short as possible so that you can learn React just start using it because. The way you learn things is by implementing them. Yeah instead of watching videos in the videos are really there to get you to the point where you can start working on it yourself. 

Peter Fisher: [00:15:56] Sure. Yeah. No, I totally get that.

I mean the whole JavaScript thing. Well anything really in terms of code, you have to do it. You can't just listen to someone you will obviously absorb information and knowledge and stuff and you will hear keywords, but you have to just smash that keyboard and type those keys and actually break and make things.
So yeah  Learning React Today. That's that's cool. That's very clever clever title. So how long is the course then? 

Kyle Cook: [00:16:28] So right now the course is between about four and five hours. It's maybe like four hours 20 minutes,  four hours 30 minutes. I have a few extra videos on planning to add in the coming weeks and months, but that'll probably push it closer to the five to five hours 15-minute Mark. 

Peter Fisher: [00:16:41] That's very comfortable for a day. Nice. Yeah. 

Kyle Cook: [00:16:44] Yeah. Definitely. I wanted to make it short enough that you could digest it code it yourself and then, you know move on to the next video without having to rush through everything. 

Peter Fisher: [00:16:51] What kind of things do you cover in the course?

Kyle Cook: [00:16:55] So I cover everything in modern React. The course is very recent just came out, you know, like two weeks ago or so. So I cover everything to do with React itself. So JSX, class components, function components and hooks which are really the big things with react also cover context as well, which is really important.
But the idea of the course is not necessarily just to like brain dump on you the documentation of React but to try to teach you the React mind set that component mindset because for me when I was learning like the React documentation is pretty good. It can teach me a lot about stuff but the component mindset was really hard for me to figure out so that's what I try to focus on in the course.

Peter Fisher: [00:17:30] Sure. Yeah. Yeah, I get that. It's like trying  to understand an abstract concept just by reading about. It's like 

Kyle Cook: [00:17:40] Exactly 

Peter Fisher: [00:17:41] What that doesn't make any sense. You have to try it out and break it. 

Kyle Cook: [00:17:45] Yeah in the high part is even when you start trying it out. It's so different than what you're used to it's like almost pains you to write it that way at first until you really get it figured out.

Peter Fisher: [00:17:53] Yeah. Yeah. That's a good point. I mean, that's what I found when I was playing with Gatsby. It's like you you are in this zone of "this is how it should be" and then you end up writing code in the Gatsby way and it's like you almost feel like you shouldn't be doing it because it looks wrong to begin with and then it makes sense and it's like, oh, 

Kyle Cook: [00:18:14] Yeah, like it has magical one to click that like, oh, wow. This is way better than what I was doing before.

Peter Fisher: [00:18:19] When the penny drops. It's like, yeah. It does make sense? Okay. So I mean you said that there's more more modules. Do turn them as modules or videos? 

Kyle Cook: [00:18:32] So the course is broken down into right now currently, in two projects. There is one project which is about an hour and that is like the documentation brain dump project where I like teach you everything the nitty-gritty of all the different parts of React that you need to know and the second project which is the rest of the course you have three and a half hours or so, that is going to be all of the mindset teaching so it's like.
Here's how you use everything. I just taught you in the first project and we're going to implement it in a way. It's component-based and try to get you thinking and then that component mindset as you implement all these new features. 

Peter Fisher: [00:19:03] So it's both theoretical and practical. That's really cool. 

Kyle Cook: [00:19:06] Yeah. Yeah. Actually I have a video at the very end of the course which is like a review of the. Previous code that we've written. It's my favourite video because it's like a code review of the code. So it's a really great way for me to say. Okay. This is why we chose this pattern, you know, like here's why it's good.
Here's why it's bad. Like here's what you could do. Here's what you should have done like that kind of stuff. I really like. 

Peter Fisher: [00:19:26] Yeah. That sounds awesome. Yeah, I really like that approach. It's sort of like because often these courses like, yep, you're done, you know. There's your certificate, pat yourself on the back. But having the approach of "this is what we've created.  Now. Let's review it" that is enforcing and reinforcing the learners understanding of the course. It's like reading your own writing again. Yeah, that's really really good. 
Forgive me for asking but do you talk about where it could go from there, you know in terms of like upgrades or changes in the future?

Kyle Cook: [00:20:07] Yeah, actually the very last video of my course as it is right now is a video that says here's what we've built so far and it's like I've taught you everything you need to know. Now, you need to just start implementing things and I give three steps. Like the first one is like here's something that's pretty easy to do like based purely on what we've done before implement it you shouldn't have no problems.
The second step is a little bit more advanced. It's like, okay, here's how you start doing things that you maybe haven't been taught yet and in the third step is how to kind of integrate a bunch of other technologies into React. So it's like here's what you can do once you've passed the first two steps.
Now, you can figure out how to glue everything together and start building a larger application. 

Peter Fisher: [00:20:41] Awesome. Awesome. I like that. Yeah, what kind of project is it that the student is creating? 

Kyle Cook: [00:20:49] So the first project is just a really basic counter application the project itself, you could probably make in my 10 minutes, but the whole explanation is what draws it out to be an hour long.
So that's just the learning project. And then the main project of the course is still a learning project. It's not like a complete full stack application project. It's just a recipe application. So a way to store recipes edit recipes, you know, delete add. Just a very basic crud application.
Peter Fisher: [00:21:14] Nice. Nice. Okay, and what kind of resources do you include in that in that course? 

Kyle Cook: [00:21:23] Like for videos and quizzes that kind of stuff. 

Peter Fisher: [00:21:26] Yeah well that or is there is there a bit the ability for them to take the code away or you know, it's a code held somewhere for that they can access. 

Kyle Cook: [00:21:34] Yeah, so I have all the videos of the course.
Obviously you can download them or stream them whichever is easiest for you. I also have low resolution versions for anyone on a slower internet connection or a metered internet connection. Also, all the source code is completely available. So every video has a before and after link so it's like this is a source code at the beginning of the video.
This is the source code of the end. So if you skip a video for some reason or maybe your code is slightly different you can always start from where that video starts and then I don't have any quizzes or anything because I feel like the process of the videos is like kind of quizzing yourself almost as you code along, especially at the end when I'm like here's what you can do next.
That's kind of like the quiz. 

Peter Fisher: [00:22:10] Sure sure. Oh, it sounds really good. It sounds really good. And I like the idea that you're adding to it, you're improving it as it goes along. That's really cool. What kind of feedback have you had so far?

Kyle Cook: [00:22:26] It's been really great actually so many people have left comments on the videos or messaged me directly and emailed me and they've been like I've really loved this course and how it's just like smaller than a lot of other courses. Many courses are maybe like 15, 20 hours long. A lot of people are like, you know, I learned more in 4 hours than I learned at this 20 hour course and that's feels great to me that I'm able to condense so much information into a useful, you know period of time. Like people actually learn from it instead of just being brain dumped too much and that one video I talked about that was like the code review video. I've gotten the most positive feedback about that people said that that's their favourite part of the whole course is looking back at what they've made. 

Peter Fisher: [00:23:01] That's good. Yeah, because I guess you can get to a point, I mean I do as I'm learning things I'm like, you know, I will read someone's code, perhaps I'll copy it or change it and add it in my code. But I'm not a hundred percent sure why that is there and what that means. You know and and having someone explain that is really important. 
How many times have I created like something and I've gone well, I don't really know why that is there, but it has to happen.

Kyle Cook: [00:23:33] Because copy something from stack Overflow.

Peter Fisher: [00:23:35] Yeah, it's like when something works and you're not too sure why 

Kyle Cook: [00:23:42] Yep, that's almost worse than it not working 

Peter Fisher: [00:23:45] It is right is yeah,  yeah, or you expect it to fail and it works

Kyle Cook: [00:23:50] Yeah, been there, done that too many times.

Peter Fisher: [00:23:54] Yeah. Okay, so okay going back to the course what does a student need in terms of experience in order to start this course, what's the prerequisites?

Kyle Cook: [00:24:07] Pretty much the exact same things I said for what you need to know to start only React, just basic HTML, CSS,  intermediate JavaScript skills and then ES6, especially because I use a lot of ES6 features in the course and I expect that the student knows those.
So I don't go in depth on how those work. So like these structuring like we don't talk about that in the course. I wanted it to be focused only on React so you need to know ES6 at least to a moderate level before you start the course.

Peter Fisher: [00:24:32] Sweet. Okay. Yeah, I mean that makes sense makes perfect sense. I guess you're not here to teach ES6 in the course, you know, you kind of need that to know that before you do it.
So yeah as a course lecture myself it can be a little bit difficult to know where the cutoff is. It's like, you know because  you obviously don't want to create a course which explains everything under the sun because then you dilute the actual essence of what you're trying to teach.
So yeah, that's  really good. I'm glad that you've cornered that off because that can be quite stressful to sort of know what to add and what not to add. I mean in terms of the planning of a course like this. How did you go about? 

Kyle Cook: [00:25:23] So the way I went about it was one doing a lot of research on like the intricacies of React because in order to teach something you need to know not just how to do it but like why. So I did lots of research and then I started building projects. So I wanted to build a small project which is where I did the counter application. I actually kind of almost pulled the idea straight from the React docs because they use a counter application at some point in their documentation.
I was like, oh that's a great idea to explain a lot of concepts and then as for the recipe app, it's just kind of like a more fun to do application. It has the same concepts as a to-do, but it's more enjoyable than a to-do in a little bit more advanced as well. So I kind of built that out and then after I built out the like projects then I went back and said, okay.
Now, how do I integrate all the teaching into this? So I modified the code a lot to make sure I included all of the concepts. I wanted inside that project code. 

Peter Fisher: [00:26:13] That sounds really good and a very thorough process. You're essentially sort of reviewing your own thing right?

Kyle Cook: [00:26:22] Yeah actually as I was recording the course, I got through like the first five or six videos and then I realised you know, I'm gonna change this section of the second project because I was like, I want to teach this new topics.
I even changed the course as I was recording it. So it was quite a lot of review.

Peter Fisher: [00:26:38] Is it done in the way that one needs to or should learn the first project before they jump on to the. 

Kyle Cook: [00:26:45] Yeah, yeah, definitely. I think the first projects important because it lays the groundwork for the second project. 
You could jump straight to the second project, but I don't explain topics in nearly the same depth as I did in the first project. 

Peter Fisher: [00:26:55] Right, right. Yeah. Yeah, I get that. So in terms of Web Dev Simplified what  is around the corner? What are your plans? 

Kyle Cook: [00:27:05] For the channel or just in general? 

Peter Fisher: [00:27:07] So just a general, you know, have you got any other things up your sleeve any other courses 

Kyle Cook: [00:27:13] Yeah, so I started a newsletter Yesterday actually so that's been  kind of really fun to work with just try to get more information out there because a lot of things are too small for a video. So I figured a newsletter is a perfect place for those smaller tips. And then I also want to start live streaming in the next maybe a month or two.
Whenever I get some free time because I think that'd be a lot of fun. Also more of like a thought process kind of teaching because I can really brain dump my thoughts as opposed to just here's how you do things. 

Peter Fisher: [00:27:41] Yeah. Yeah. I do recommend live streaming. It's a different  ballgame. You end up being you know, you're coding really raw as in everybody can see you and there's more of them than there are of you. So they can spot the bugs that you create far quicker than you can say. There is a lot of interaction which is which is pretty handy and pretty awesome. I'm assuming in the course though. It's nice and clean. It's like, you know, the teaching the things that work rather than a video of you trying to fix bugs.
Kyle Cook: [00:28:16] Yeah, definitely almost every failure or are in the course is something that I specifically made fail like a common failure that either I ran into making the project or a lot of people run into so I was like, I'm going to make it wrong the first time to kind of teach you to why that thing you think would be right is actually wrong.
Peter Fisher: [00:28:32] Nice, I like that, that's a nice little nice little additive. That's nice. It's brilliant. I really like speaking to people when I can see them progressing in awesome ways. And you know the channel your channel is doing awesomely. Well, how on Earth do you fit it all in? 

Kyle Cook: [00:28:51] That is the hard part for sure. I get up real early in the morning.
That's the only way I can fit it all in and just lots of time management is really the only thing. I have like a very strict schedule I make a weekly plan every week and I try to stick to it. That's the only way I can get it all done.

Peter Fisher: [00:29:04] Discipline self discipline. Yep. Yeah,  it's highly rated in my book.

Kyle Cook: [00:29:10] Yeah, it's the only thing that's keeping me going. 

Peter Fisher: [00:29:14] Good. is there anything else that you wish to add before we sign off? 

Kyle Cook: [00:29:19] Probably the only thing I'd add is that if you're on the fence about learning React or not learning it, I'd highly recommend you just go with it and learn it or at least learn some front-end framework.
It doesn't have to be React it can be any framework. But once you learn one framework, it's going to really open you up to a lot of not only jobs, but just possibilities for your own projects. It really makes things a lot easier. 

Peter Fisher: [00:29:39] Right. Yeah. Yeah, I get that, that's such a nice little piece of advice there.
It's if you're on the fence just do it. 

Kyle Cook: [00:29:47] Yeah, it seems very daunting. But once you get into it, it's a lot easier than it looks from the outside like once you get that mindset everything just falls into place. 

Peter Fisher: [00:29:55] Yeah. Yeah, it's a bit like I mean, I see it like, you know,  when you're swimming and you're holding onto the side and  just learning to swim you're scared to let go of the side, but you know that it's going to be okay.
But because you haven't done that before it's a bit daunting. So you end up crawling around the side. 
Okay. So there's a question that I ask guests at the end of the podcast and that is if you could talk to your former self. 
What advice would you give it can be more than one and it can be technical or non-technical or both?
So what advice would you give? 

Kyle Cook: [00:30:35] Yeah, probably the biggest advice I would give myself is to like whatever you're dreaming of doing right now start it. It's never going to be easier. Like if you say I'll start tomorrow. I'll start in an hour know you start right now. 
With my YouTube channel i kept telling myself. I'll start it. When I do this. I'll start it when this happens and I pushed it off for  like two three years before I finally started it. And if I had just started at three years ago like thinking about where I could be now. If I had an extra three years of time as opposed to starting at when I did so it's just like start now same thing with the gym a lot of times if I like miss a day at the gym.
I'm like, oh, I'll just restart my schedule next week and it's like no no just just go. It's like it's okay if you messed up and missed a day, you just need to get back on the train and keep going instead of trying to find the best time to do something because there's never a best time. 

Peter Fisher: [00:31:20] That's extremely inspiring and motivational. That is awesome. Thank you very much Kyle. Thank you very much for coming on the show. It's been an absolute pleasure and I wish you well. 
I wish you well with the channel and the course and everything. I will leave links in the show notes below. To both your [channel](https://www.youtube.com/webdevsimplified), newsletter as well as the course, which is [Start Learning React Today](http://bit.ly/2ndUMpu). 
Thank you very much for coming on the show, and thank you ever so much for everybody who is watching on the YouTubes and listening on the podcasts. 

Happy Coding everyone and I'll speak to you again soon. 

Cheers. Bye.

Out Take
---
Hello coders and welcome to another How to Code Well podcast today we will aghhh.
I think this happened last time.

Kyle Cook: [00:32:03] Me every time I do my intro.

Peter Fisher: [00:32:07] Hello coders, and welcome to another How To Code Well podcast today. We're going to be talking about.
