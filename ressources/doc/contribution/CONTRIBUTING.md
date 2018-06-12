# How to contribute

In order to help [Jakku](https://github.com/Mykapo/Jakku) to prosper, or to improve it, you might want to contribute. As it is an Open Source project, you encourage you to do so, but highly recommend you to read the following lines.

## Foreword

First of all, you need to read the [Code of Conduct](./code-of-conduct.md).

This project was started using [Git Flow](https://github.com/nvie/gitflow) to make iterations and more basically every commit more readable. **We highly encourage you to use it**. If you're not using it, in order to maintain consistency with the practices encouraged by [Git Flow](https://github.com/nvie/gitflow), we will ask you to read and follow the operation that you can find in the [documentation](https://github.com/nvie/gitflow), or in [Daniel Kummer's cheatsheet](https://danielkummer.github.io/git-flow-cheatsheet/).

## Open an issue

You might need to open an issue for different cases. For any case, please check that :
* What you are looking for does'nt exist in the documentation 
* A similar issue hasn't already been opened.

### Question or problem

For question or problem, your issue's title **MUST** be written "Q&P : <title of your question>". We would love to help you as soon as we could. In order to do so, you might help us helping you. [StackOverflow](https://stackoverflow.com/) as a very good documentation about [how to ask a question](https://stackoverflow.com/help/how-to-ask).

To summarize it, the title must be relevant, you should detail what you have tried to solve it, and if you find an answer before someone helps you find it, it will be very appreciated if you could explain what is the solution found. Working like this really helps avoiding duplicates as it can also help someone else can have the same problem.

### Bug found

If you found a bug, your issue's title **MUST** be written "BUG : <title of your issue>". In the issue itself, you should specify the version of **Jakku** you are using, your environment (anything relevant to help us reproduce the bug), and write a small paragraph that explain how to reproduce the bug. In a "best-case scenario", if you know how to fix the bug, feel free to [submit a pull request](#Submit-a-pull-request) to correct the bug.

### Proposing a new feature

If you want to propose a new feature, your issue's title **MUST** be written "FEATURE : <title of the feature>". A good description of what the feature should be, and why/how it would serve the project will help us understand it well, and implement it as close as possible as you need it.

Of course you can [submit a pull request](#Submit-a-pull-request) that implements it, but you must be aware of few things, especially if the new feature implies visual elements. As user experience is fundamental in any product that aims to be used by at least one person, a few rules can allow your feature to be part of **Jakku** instead of something weird inside of it. After, of course, reading all the technical documentation, you must preserve an UI coherence. As we sincerely trust your will of making **Jakku** better, we want you to make sure that your feature make its usage greater or at least not less easy.

## Submit a pull request

The time you spend coding for this project is all the more precious as open source depends on contributions. In order to your time, we would really appreciate if you could verify if any other developer isn't fixing the same bug or implementing the same feature. Also note that for each pull request, there **MUST** be an issue opened. Pull requests **won't be accepted** if they don't refer to a specific issue.

### Coding Rules

To ensure consistency throughout the source code, keep these rules in mind as you are working:

* All features or bug fixes must be tested by one or more specs (unit-tests).
* All methods must be documented, that includes a short description, all parameters with their type (and description if needed), and return type
* We follow [PHP Standards Recommendations](https://www.php-fig.org/psr/). 

### Commit message guideline

Each commit message consists of a header, a body and a footer. The header has a special format that includes a type, a scope and a subject:

```
<type>(<scope>): <subject>
<BLANK LINE>
<body>
<BLANK LINE>
<footer>
```
The header is mandatory and the scope of the header is optional.

Any line of the commit message cannot be longer 100 characters! This allows the message to be easier to read on GitHub as well as in various git tools.

#### Subject

The subject contains succinct description of the change:

* use the imperative, present tense: "change" not "changed" nor "changes"
* don't capitalize first letter
* no dot (.) at the end

#### Body

Just as in the subject, use the imperative, present tense: "change" not "changed" nor "changes". The body should include the motivation for the change and contrast this with previous behavior.

#### Footer

The footer should contain any information about Breaking Changes and is also the place to reference GitHub issues that this commit Closes.

Breaking Changes should start with the word BREAKING CHANGE: with a space or two newlines. The rest of the commit message is then used for this.
