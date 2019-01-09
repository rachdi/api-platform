import React from 'react';
import { Route } from 'react-router-dom';
import { List, Create, Update, Show } from '../components/shoppingitem/';

export default [
  <Route path="/shopping_items/create" component={Create} exact key="create" />,
  <Route path="/shopping_items/edit/:id" component={Update} exact key="update" />,
  <Route path="/shopping_items/show/:id" component={Show} exact key="show" />,
  <Route path="/shopping_items/" component={List} exact strict key="list" />,
  <Route path="/shopping_items/:page" component={List} exact strict key="page" />
];
