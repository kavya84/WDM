import './App.css';
import Heading from './components/Heading';
import Home from './components/Home';
import About from './components/About';
import Login from './components/Login';
import Services from './components/Services';
import Register from './components/Register';
import Footer from './components/Footer';
import Contact from './components/Contact';
import RegSuccess from './components/RegSuccess';
import SendEmail from './components/sendEmail';
import Admin from './components/Admin';
import Manager from './components/Manager';
import Resident from './components/Resident';
import Visitor from './components/Visitor';
import crudManager from './components/crudManager';
import viewManager from './components/viewManager';
import addManager from './components/addManager';
import AdminSuccess from './components/AdminSuccess';
import modifyManager from './components/modifyManager';
import crudResident from './components/crudResident';
import viewResident from './components/viewResident';
import addResident from './components/addResident';
import modifyResident from './components/modifyResident';
import crudVisitor from './components/crudVisitor';
import viewVisitor from './components/viewVisitor';
import addVisitor from './components/addVisitor';
import modifyVisitor from './components/modifyVisitor';
import crudBuilding from './components/crudBuilding';
import viewBuilding from './components/viewBuilding';
import addBuilding from './components/addBuilding';
import modifyBuilding from './components/modifyBuilding';
import crudApartment from './components/crudApartment';
import viewApartment from './components/viewApartment';
import addApartment from './components/addApartment';
import modifyApartment from './components/modifyApartment';
import crudService from './components/crudService';
import viewService from './components/viewService';
import addService from './components/addService';
import modifyService from './components/modifyService';
import crudGarden from './components/crudGarden';
import viewGarden from './components/viewGarden';
import addGarden from './components/addGarden';
import modifyGarden from './components/modifyGarden';
import CrudPools from './components/crudPool';
import viewPool from './components/viewPool';
import addPool from './components/addPool';
import modifyPool from './components/modifyPool';
import {BrowserRouter as Router,Route,Switch} from 'react-router-dom';

function App() {
  return (
    <Router>
    <div className="App">
      <Heading />
      <Route exact path='/' component={Home} />
      <section className="Clinks">
        <Switch>
          <Route exact path='/home' component={Home} />
          <Route exact path='/about' component={About} />
          <Route exact path='/services' component={Services} />        
          <Route exact path='/register' component={Register} />
          <Route exact path='/contact' component={Contact} />
          <Route path='/blog' component={() => { 
     window.location.href = 'http://kxg3373.uta.cloud'; 
     return null;
}}/>
          <Route exact path='/login' component={Login} />

          <Route path='/RegSuccess' component={RegSuccess} exact/>
          <Route exact path='/SendEmail' component={SendEmail} />
          <Route exact path='/Admin' component={Admin} />
          <Route exact path='/Manager' component={Manager} />
          <Route exact path='/Resident' component={Resident} />
          <Route exact path='/Visitor' component={Visitor} />
          <Route exact path='/crudManager' component={crudManager} />
          <Route exact path='/viewManager' component={viewManager} />
          <Route exact path='/addManager' component={addManager} />
          <Route exact path='/AdminSuccess' component={AdminSuccess} />
          <Route exact path='/modifyManager/:id' component={modifyManager} />
          <Route exact path='/crudResident' component={crudResident} />
          <Route exact path='/viewResident' component={viewResident} />
          <Route exact path='/addResident' component={addResident} />
          <Route exact path='/modifyResident/:id' component={modifyResident} />
          <Route exact path='/crudVisitor' component={crudVisitor} />
          <Route exact path='/viewVisitor' component={viewVisitor} />
          <Route exact path='/addVisitor' component={addVisitor} />
          <Route exact path='/modifyVisitor/:id' component={modifyVisitor} />
          <Route exact path='/crudBuilding' component={crudBuilding} />
          <Route exact path='/viewBuilding' component={viewBuilding} />
          <Route exact path='/addBuilding' component={addBuilding} />
          <Route exact path='/modifyBuilding/:id' component={modifyBuilding} />
          <Route exact path='/crudApartment' component={crudApartment} />
          <Route exact path='/viewApartment' component={viewApartment} />
          <Route exact path='/addApartment' component={addApartment} />
          <Route exact path='/modifyApartment/:id' component={modifyApartment} />
          <Route exact path='/crudService' component={crudService} />
          <Route exact path='/viewService' component={viewService} />
          <Route exact path='/addService' component={addService} />
          <Route exact path='/modifyService/:id' component={modifyService} />
          <Route exact path='/crudGarden' component={crudGarden} />
          <Route exact path='/viewGarden' component={viewGarden} />
          <Route exact path='/addGarden' component={addGarden} />
          <Route exact path='/modifyGarden/:id' component={modifyGarden} />
          <Route exact path='/CrudPools' component={CrudPools} />
          <Route exact path='/viewPool' component={viewPool} />
          <Route exact path='/addPool' component={addPool} />
          <Route exact path='/modifyPool/:id' component={modifyPool} />
        </Switch>
      </section>
      <Footer />
    </div>
    </Router>
  );
}

export default App;
