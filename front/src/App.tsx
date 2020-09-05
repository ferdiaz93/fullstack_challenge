import React from 'react';
import { makeStyles } from '@material-ui/core/styles';
import Paper from '@material-ui/core/Paper';
import Tabs from '@material-ui/core/Tabs';
import Tab from '@material-ui/core/Tab';

import './App.css';

const useStyles = makeStyles({
  root: {
    flexGrow: 1,
  },
  customLabelColor: {
    color:"#790909"
  }
});

function App() {
  const classes = useStyles();
  const [value, setValue] = React.useState(0);

  const handleChange = (event:any, newValue:any) => {
    setValue(newValue);
  };
  return (
    <div className="App">
      <Paper className={classes.root}>
        <Tabs
          value={value}
          onChange={handleChange}
          indicatorColor="primary"
          textColor="primary"
          centered
        >
          <Tab label="Modelos" classes={{textColorPrimary: classes.customLabelColor}} />
          <Tab label="Ficha de model" />
        </Tabs>
      </Paper>
    </div>
  );
}

export default App;
