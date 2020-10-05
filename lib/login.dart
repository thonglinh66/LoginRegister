import 'package:flutter/material.dart';




class Login extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Center(child: Row(
        children: <Widget>[
          Padding(
            padding: const EdgeInsets.only(left:8.0),
            child: Text("Login",style: TextStyle(fontSize: 50),),
          )
        ],
      ),
      ),
    );
  }
}